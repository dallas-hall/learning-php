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
$date = date("Y-m-d");
$name = $_SESSION['checkoutError']['name'];
$address = $_SESSION['checkoutError']['address'];
$phone = $_SESSION['checkoutError']['phone'];
$email = $_SESSION['checkoutError']['email'];
$creditCard = "**** **** **** " . substr($_SESSION['checkoutError']['creditCard'], -4);
$expiryDate = $_SESSION['checkoutError']['creditCardExpiryDate'];
$internationalPostage = $postagePrices['international'];

// Create a unique order ID using the customer's name and the time of order
function getOrderID() {
	$orderID = preg_replace("/\s+/", "_", $_SESSION['checkoutError']['name']);
	$currentTime = time();
	//echo "$orderID . \"@\" . $currentTime";
	return $orderID . "@" . $currentTime;
}

function getReceipt($orderID, $date, $name, $address, $phone, $email, $creditCard, $expiryDate) {

	echo "<table>\n\t<tbody>\n\t\t<tr>\n\t\t\t<th scope='row'>Order ID</th>\n\t\t\t<td>$orderID</td>\n\t\t</tr>\n\t</tbody>";
	echo "<tbody>\n\t\t<tr>\n\t\t\t<th scope='row'>Order Date</th>\n\t\t\t<td>$date</td>\n\t\t</tr>\n\t</tbody>";
	echo "<tbody>\n\t\t<tr>\n\t\t\t<th scope='row'>Name</th>\n\t\t\t<td>$name</td>\n\t\t</tr>\n\t</tbody>";
	echo "<tbody>\n\t\t<tr>\n\t\t\t<th scope='row'>Address</th>\n\t\t\t<td>$address</td>\n\t\t</tr>\n\t</tbody>";
	echo "<tbody>\n\t\t<tr>\n\t\t\t<th scope='row'>Phone</th>\n\t\t\t<td>$phone</td>\n\t\t</tr>\n\t</tbody>";
	echo "<tbody>\n\t\t<tr>\n\t\t\t<th scope='row'>Email</th>\n\t\t\t<td>$email</td>\n\t\t</tr>\n\t</tbody>";
	echo "<tbody>\n\t\t<tr>\n\t\t\t<th scope='row'>Credit Card</th>\n\t\t\t<td>$creditCard</td>\n\t\t</tr>\n\t</tbody>";
	echo "<tbody>\n\t\t<tr>\n\t\t\t<th scope='row'>Expiry Date</th>\n\t\t\t<td>$expiryDate</td>\n\t\t</tr>\n\t</tbody>\n</table>";
}

function saveOrder($orderID, $date, $name, $address, $phone, $email, $internationalPostage) {
	echo "SAVE TO FILE STARTING...<br><br>";
	$customerDetails = "\"$orderID\", \"$date\", \"$name\", \"$address\", \"$phone\", \"$email\", ";
	$subTotal = 0;

	foreach($_SESSION['cart'] as $aProduct => $productArray) {
		$orderDetails = null;
		$lineToWrite = null;
		//echo "$_SESSION[cart] -> $aProduct -> $productArray -> ";
		//$lineToWrite = "@@@ START @@@\"$orderID\", \"$date\", \"$name\", \"$address\", \"$phone\", \"$email\", ";
		$counter = 0;
		foreach($productArray as $productDetail) {
			if ($counter == 2) {
				//echo $productDetail;
				$orderDetails .= "\"$productDetail\", ";
				$subTotal += $productDetail;
			} elseif($productDetail === 'Australia') {
				$orderDetails .= "\"0\", ";
			} elseif ($productDetail === 'International') {
				$orderDetails .= "\"$internationalPostage\", ";
			} else {
			$orderDetails .= "\"$productDetail\", ";
			}
			$counter++;
			//echo $productDetail . " -> ";
		}
		//echo $subTotal;
		$lineToWrite .= $customerDetails . $orderDetails . "\"$subTotal\"" ."<br>";
		echo $lineToWrite;
		//echo $customerDetails;
	}
	echo "<br><br>SAVE TO FILE FINISHED.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--Setting page information, which I learnt in the course textbook and also at https://www.w3schools.com/tags/tag_meta.asp-->
	<!-- using modules for repeated code -->
	<?php require_once("head_script.php") ?>
</head>
<body>
<div class="pageWrapper" id="singleTemplate">
	<?php require_once("header_script.php"); ?>
	<section class="pageBody">
		<article class="singlePage">
			<main>
				<h1>Order Receipt</h1>
				<?php
				echo getReceipt($orderID, $date, $name, $address, $phone, $email, $creditCard, $expiryDate);
				saveOrder($orderID, $date, $name, $address, $phone, $email, $internationalPostage);
				?>
			</main>
		</article>
	</section>
	<?php require_once("footer_script.php"); ?>
</div>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
<?php include_once("debug.php"); ?>
</body>
</html>