<?php
/* Check if the session has already been started. */
if(!isset($_SESSION)){
	session_start();
}
require_once("functions_script.php");
$currentFilename = getFilenameWithoutExtension(__FILE__);

//Functions
function createForm() {
	$form .= "<fieldset>";
	$form .= "<legend><b>Order Checkout Form</b></legend>";
	$form .= "\t<form>";
	$form .= "\t\t<label>Name:<input id=\"checkoutName\" type=\"text\" name=\"name\" placeholder=\"Enter your name...\"	required size=\"32\"></label><br>";
	$form .= "\t\t<label>Email:<input id=\"checkoutEmail\" type=\"email\" name=\"email\" placeholder=\"Enter your email...\" required size=\"32\"></label><br>";
	$form .= "\t\t<label>Address:<textarea id=\"checkoutAddress\" name=\"address\" placeholder=\"Enter your address\"></textarea></label><br>";
	$form .= "\t\t<label>Mobile:<input id=\"checkoutPhone\" type=\"text\" name=\"phone\" placeholder=\"Enter your mobile number...\" required size=\"32\"></label><br>";
	$form .= "\t\t<label>Credit Card:<input id=\"checkoutCreditCard\" type=\"text\" name=\"creditCard\" placeholder=\"Enter your credit card...\" required size=\"32\"></label><br>";
	$form .= "\t\t<label>Expiry Date:<input id=\"checkoutCreditCardExpiry\"type=\"date\" name=\"creditCardExpiryDate\" required size=\"32\"></label><br>";
	$form .= "\t</form>";
	$form .= "</fieldset>";
	return $form;
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
				<h1>Golden Tree Productions Checkout</h1>
				<?php
				echo createForm();
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