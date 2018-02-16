<?php
/* Check if the session has already been started. */
if(!isset($_SESSION)){
	session_start();
}

require_once("functions_script.php");
$currentFilename = getFilenameWithoutExtension(__FILE__);

$orderID = $_SESSION['orderDetails']['orderID'];
$date = date("Y-m-d");
$name = $_SESSION['orderDetails']['name'];
$address = $_SESSION['orderDetails']['address'];
$phone = $_SESSION['orderDetails']['phone'];
$email = $_SESSION['orderDetails']['email'];
$creditCard = "**** **** **** " . substr($_SESSION['orderDetails']['creditCard'], -4);
$expiryDate = $_SESSION['orderDetails']['creditCardExpiryDate'];
$orderTotal = $_SESSION['orderDetails']['orderTotal'] + $_SESSION['orderDetails']['postagePrice'];

function getReceipt($orderID, $date, $name, $address, $phone, $email, $creditCard, $expiryDate, $orderTotal) {
	echo "<table id='receiptTable'>\n\t<tbody>\n\t\t<tr>\n\t\t\t<th scope='row'>Order ID</th>\n\t\t\t<td>$orderID</td>\n\t\t</tr>\n\t";
	echo "\n\t\t<tr>\n\t\t\t<th scope='row'>Order Date</th>\n\t\t\t<td>$date</td>\n\t\t</tr>\n\t";
	echo "\n\t\t<tr>\n\t\t\t<th scope='row'>Name</th>\n\t\t\t<td>$name</td>\n\t\t</tr>\n\t";
	echo "\n\t\t<tr>\n\t\t\t<th scope='row'>Address</th>\n\t\t\t<td>$address</td>\n\t\t</tr>\n\t";
	echo "\n\t\t<tr>\n\t\t\t<th scope='row'>Phone</th>\n\t\t\t<td>$phone</td>\n\t\t</tr>\n\t";
	echo "\n\t\t<tr>\n\t\t\t<th scope='row'>Email</th>\n\t\t\t<td>$email</td>\n\t\t</tr>\n\t";
	echo "\n\t\t<tr>\n\t\t\t<th scope='row'>Credit Card</th>\n\t\t\t<td>$creditCard</td>\n\t\t</tr>\n\t";
	echo "\n\t\t<tr>\n\t\t\t<th scope='row'>Expiry Date</th>\n\t\t\t<td>$expiryDate</td>\n\t\t</tr>\n\t";
	echo "\n\t\t<tr>\n\t\t\t<th scope='row'>Order Total</th>\n\t\t\t<td>$$orderTotal</td>\n\t\t</tr>\n\t</tbody>\n</table>";
}

function getPrintButtons() {
	echo "<fieldset><legend><b>Printing Options</b></legend>";
	echo "<p>Press <b>Print</b> to print the receipt or <b>Close</b> 
to return to the shopping cart page. Your order has been finalised and pressing close will remove the items from your cart.<br></p>";
	echo"<form id='printForm'>";
	echo "<input class='receiptButtons' type='button' value='Print' onclick='window.print();'>";
	echo "</form>";
	echo "<form id='closeForm' action='clear_cart.php'>";
	echo "<input class='receiptButtons' type='submit' value='Close'>";
	echo "</form></fieldset>";
}

?>
<!DOCTYPE html>
<html>
<?php require_once("head_script.php"); ?>
<body id="printPage">
	<main>
		<header>
			<img id="letterHead" src="img/logos/gtp_letter_head.png">
		</header>
		<h1>Order Receipt</h1>
		<?php
		getReceipt($orderID, $date, $name, $address, $phone, $email, $creditCard, $expiryDate, $orderTotal);
		echo "<br>";
		getPrintButtons();
		?>
	</main>
	<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
	<?php include_once("debug.php"); ?>
</body>
</html>
