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
$currentFilename = getFilenameWithoutExtension(__FILE__);

//Functions
function createForm() {
	$form = "<script src='js/checkCheckoutForm.js' type='text/javascript'></script>";
	$form .= "<fieldset>\n";
	$form .= "<legend><b>Finalise Order</b></legend>\n";
	$form .= "\t<form action='receipt.php' onsubmit='return checkCheckoutForm()' method='post'>\n";
	$form .= "\t\t<label>Name:<input id=\"checkoutName\" type=\"text\" name=\"name\" placeholder=\"Enter your name...\"	required size=\"32\"></label><span id='nameError'></span><br>\n";
	$form .= "\t\t<label>Email:<input id=\"checkoutEmail\" type=\"email\" name=\"email\" placeholder=\"Enter your email...\" required size=\"32\"></label><span id='emailError'></span><br><br>\n";
	$form .= "\t\t<label>Address:<textarea id=\"checkoutAddress\" name=\"address\" placeholder=\"Enter your address\"></textarea></label><span id='addressError'></span><br><br>\n";
	$form .= "\t\t<label>Mobile:<input id=\"checkoutPhone\" type=\"text\" name=\"phone\" placeholder=\"Enter your mobile number...\" required size=\"32\"></label><span id='phoneError'></span><br><br>\n";
	$form .= "\t\t<label>Credit Card:<input id=\"checkoutCreditCard\" type=\"text\" name=\"creditCard\" placeholder=\"Enter your credit card...\" required size=\"32\"></label><span id='creditCardError'></span><br><br>\n";
	$form .= "\t\t<label>Expiry Date:<input id=\"checkoutCreditCardExpiry\" type=\"date\" name=\"creditCardExpiryDate\" required size=\"32\"></label><span id='creditCardExpiryError'></span><br><br>\n";
	$form .= "\t\t<input class=\"checkoutButtons\" type=\"submit\" value=\"Buy Now\">\n";
	$form .= "\t</form>\n";
	$form .= "</fieldset>\n";
	return $form;
}

function createCheckoutButtons() {
	$buttons = "<fieldset><legend><b>Other Order Options</b></legend>";
	$buttons .= "<p>Press <b>Buy Now</b> to continue, <b>Clear Cart</b> to cancel your order, or <b>Shop More</b> 
to browse more products.<br></p>";
	$buttons .= "<form action=\"cart.php\">";
	$buttons .= "<input class=\"checkoutButtons\" type=\"submit\" value=\"Shopping Cart\">";
	$buttons .= "</form>";
	$buttons .= "<form action=\"clear_cart.php\">";
	$buttons .= "<input class=\"checkoutButtons\" type=\"submit\" value=\"Clear Cart\">";
	$buttons .= "</form>";
	$buttons .= "<form action=\"products.php\">";
	$buttons .= "<input class=\"checkoutButtons\" type=\"submit\" value=\"Shop More\">";
	$buttons .= "</form></fieldset>";
	return $buttons;
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
				<h1>Checkout Information</h1>
				<?php
				echo $_SESSION['finalOrderText'] . "<br>";
				echo createForm() . "<br>";
				echo createCheckoutButtons();
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