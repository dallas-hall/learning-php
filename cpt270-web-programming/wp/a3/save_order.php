<?php
/* Check if the session has already been started. */
if(!isset($_SESSION)){
	session_start();
}

// Check that a shopping cart actually exists
if(!isset($_SESSION['cart'])) {
	header("Location: cart.php");
}

require_once("functions_script.php");
require_once("load_product_data.php");
$currentFilename = getFilenameWithoutExtension(__FILE__);
$orderID = getOrderID();
$_SESSION['orderDetails']['orderID'] = $orderID;
$date = date("Y-m-d");
$name = $_SESSION['orderDetails']['name'];
$address = $_SESSION['orderDetails']['address'];
$phone = $_SESSION['orderDetails']['phone'];
$email = $_SESSION['orderDetails']['email'];
$creditCard = "**** **** **** " . substr($_SESSION['orderDetails']['creditCard'], -4);
$expiryDate = $_SESSION['orderDetails']['creditCardExpiryDate'];
$internationalPostage = $postagePrices['international'];
$orderTotal = $_SESSION['orderDetails']['orderTotal'] + $_SESSION['orderDetails']['postagePrice'];

// Create a unique order ID using the customer's name and the time of order
function getOrderID() {
	$orderID = preg_replace("/\s+/", "_", $_SESSION['orderDetails']['name']);
	$currentTime = time();
	//echo "$orderID . \"@\" . $currentTime";
	return $orderID . "@" . $currentTime;
}

function saveOrder($orderID, $date, $name, $address, $phone, $email, $internationalPostage, $orderTotal) {
	// @@ File Handling @@@
	// File path
	$savingRelativePath = "files/orders.csv";
	$saveDebugMessage = null;
	if(!file_exists($savingRelativePath)) {
		$saveDebugMessage .= "Can't find $savingRelativePath<br>";
	} else {
		$saveDebugMessage .= "Found " . basename($savingRelativePath) . " and it is " . filesize($savingRelativePath) . " bytes<br>";
		// Open the file in read only text mode.
		$savingFileHandle = fopen($savingRelativePath, "a");

		// Check if we opened the file
		if (!$savingFileHandle) {
			$saveDebugMessage .= "We couldn't open $savingFileHandle<br>";
		} else {
			$saveDebugMessage .= "We opened $savingFileHandle<br>";
		}
		//echo $saveDebugMessage;

		$saveDebugMessage =  "SAVE TO FILE STARTING...<br><br>";
		$customerDetails = "\"$orderID\",\"$date\",\"$name\",\"$address\",\"$phone\",\"$email\",";
		$subTotal = 0;

		foreach ($_SESSION['cart'] as $aProduct => $productArray) {
			$orderDetails = null;
			$lineToWrite = null;
			//echo "$_SESSION[cart] -> $aProduct -> $productArray -> ";
			//$lineToWrite = "@@@ START @@@\"$orderID\", \"$date\", \"$name\", \"$address\", \"$phone\", \"$email\", ";
			$counter = 0;
			$saleQuantity = 0;
			foreach ($productArray as $productDetail) {
				if ($counter == 1 ) {
					$saleQuantity = $productDetail;
					$orderDetails .= "\"$productDetail\",";
				} else if ($counter == 2) {
					//echo $productDetail;
					$orderDetails .= "\"$productDetail\",";
					// BUG HERE - NEEDS TO UTILISE QUANTITY
					$subTotal += ($productDetail * $saleQuantity);
				} elseif ($productDetail === 'Australia') {
					$orderDetails .= "\"0\",";
				} elseif ($productDetail === 'International') {
					$orderDetails .= "\"$internationalPostage\",";
				} else {
					$orderDetails .= "\"$productDetail\",";
				}
				$counter++;
				//echo $productDetail . " -> ";
			}
			//echo $subTotal;
			$lineToWrite .= $customerDetails . $orderDetails . "\"$subTotal\"," . "\"$orderTotal\"\n";
			fwrite($savingFileHandle, $lineToWrite);
			$saveDebugMessage .= "WRITING " . $lineToWrite . "<br>";
			//echo $saveDebugMessage;
			//echo $customerDetails;

		}
		echo "<br><br>SAVE TO FILE FINISHED.";

		// Try to close the file
		fclose($savingFileHandle);
	}
}

saveOrder($orderID, $date, $name, $address, $phone, $email, $internationalPostage, $orderTotal);
header("Location: receipt.php");
?>