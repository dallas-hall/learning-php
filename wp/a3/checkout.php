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
	$form .= "<script src='js/visaLogo.js' type='text/javascript'></script>";
	$form .= "<fieldset id='checkoutFieldset'>\n";
	$form .= "<legend><b>Finalise Order</b></legend>\n";
	//$form .= "\t<form action='receipt.php' onsubmit='return checkCheckoutForm()' method='post'>\n";
	$form .= "\t<form action='check_checkout_form.php' method='post'>\n";
	$form .= "\t\t<label>Name:<input id='checkoutName' type='text' name='name' placeholder='Enter your name...'	required size='32'></label><br><span id='nameError'></span><br>\n";
	$form .= "\t\t<label>Email:<input id='checkoutEmail' type='email' name='email' placeholder='Enter your email...' required size='32'></label><br><span id='emailError'></span><br>\n";
	$form .= "\t\t<label>Address:<textarea id='checkoutAddress' name='address' placeholder='Enter your address'></textarea></label><br><span id='addressError'></span><br>\n";
	$form .= "\t\t<label>Mobile:<input id='checkoutPhone' type='text' name='phone' placeholder='Enter your mobile number...' required size='32'></label><br><span id='phoneError'></span><br>\n";
	$form .= "\t\t<label>Credit Card:<input id='checkoutCreditCard' type='text' name='creditCard' placeholder='Enter your credit card...' required size='32' oninput='checkCreditCart()'></label><img id='visaLogo' src='img/logos/visa.jpg' width='64px' height='64px' hidden><br><span id='creditCardError'></span><br>\n";
	$form .= "\t\t<label id='creditCardExpiryLabel'>Expiry Date:<input id='checkoutCreditCardExpiry' type='date' name='creditCardExpiryDate' required size='32'></label><br><span id='creditCardExpiryError'></span><br><br>\n";
	$form .= "\t\t<input class='checkoutButtons' type='submit' value='Buy Now'>\n";
	$form .= "\t</form>\n";
	$form .= "</fieldset>\n";
	return $form;
}

function createFormWithError($errorID, $errorMessage, $name, $email, $address, $phone, $creditCard, $creditCardExpiryDate) {
	$form = "<script src='js/checkCheckoutForm.js' type='text/javascript'></script>";
	$form .= "<script src='js/visaLogo.js' type='text/javascript'></script>";
	$form .= "<fieldset id='checkoutFieldset'>\n";
	$form .= "<legend><b>Finalise Order</b></legend>\n";
	//$form .= "\t<form action='receipt.php' onsubmit='return checkCheckoutForm()' method='post'>\n";
	$form .= "\t<form action='check_checkout_form.php' method='post'>\n";
	if($errorID == 'nameError') {
		$form .= "\t\t<label>Name:<input id='checkoutName' type='text' name='name' placeholder='Enter your name...'	required size='32' value='$name'></label><br><span id='nameError'>$errorMessage</span><br>\n";
	} else {
		$form .= "\t\t<label>Name:<input id='checkoutName' type='text' name='name' placeholder='Enter your name...'	required size='32' value='$name'></label><br><span id='nameError'></span><br>\n";
	}
	if($errorID == 'emailError') {
		$form .= "\t\t<label>Email:<input id='checkoutEmail' type='email' name='email' placeholder='Enter your email...' required size='32' value=$email></label><br><span id='emailError'>$errorMessage</span><br>\n";
	} else {
		$form .= "\t\t<label>Email:<input id='checkoutEmail' type='email' name='email' placeholder='Enter your email...' required size='32' value=$email></label><br><span id='emailError'></span><br>\n";
	}
	if($errorID == 'addressError') {
		$form .= "\t\t<label>Address:<textarea id='checkoutAddress' name='address' placeholder='Enter your address'>$address</textarea></label><br><span id='addressError'>$errorMessage</span><br>\n";
	} else {
		$form .= "\t\t<label>Address:<textarea id='checkoutAddress' name='address' placeholder='Enter your address'>$address</textarea></label><br><span id='addressError'></span><br>\n";
	}
	if($errorID == 'phoneError') {
		$form .= "\t\t<label>Mobile:<input id='checkoutPhone' type='text' name='phone' placeholder='Enter your mobile number...' required size='32' value=$phone></label><br><span id='phoneError'>$errorMessage</span><br>\n";
	} else {
		$form .= "\t\t<label>Mobile:<input id='checkoutPhone' type='text' name='phone' placeholder='Enter your mobile number...' required size='32' value=$phone></label><br><span id='phoneError'></span><br>\n";
	}
	if($errorID == 'creditCardError') {
		$form .= "\t\t<label>Credit Card:<input id='checkoutCreditCard' type='text' name='creditCard' placeholder='Enter your credit card...' required size='32' value=$creditCard oninput='checkCreditCart()'></label><img id='visaLogo' src='img/logos/visa.jpg' width='64px' height='64px' hidden></label><br><span id='creditCardError'>$errorMessage</span><br>\n";
	} else {
		$form .= "\t\t<label>Credit Card:<input id='checkoutCreditCard' type='text' name='creditCard' placeholder='Enter your credit card...' required size='32' value=$creditCard oninput='checkCreditCart()'></label><img id='visaLogo' src='img/logos/visa.jpg' width='64px' height='64px' hidden></label><br><span id='creditCardError'></span><br>\n";
	}
	if($errorID == 'creditCardDateError') {
		$form .= "\t\t<label id='creditCardExpiryLabel'>Expiry Date:<input id='checkoutCreditCardExpiry' type='date' name='creditCardExpiryDate' required size='32' value=$creditCardExpiryDate></label><br><br>\n<span id='creditCardExpiryError'>$errorMessage</span><br><br>\n";
	} else {
		$form .= "\t\t<label id='creditCardExpiryLabel'>Expiry Date:<input id='checkoutCreditCardExpiry' type='date' name='creditCardExpiryDate' required size='32' value=$creditCardExpiryDate></label><br><br>\n<span id='creditCardExpiryError'></span><br><br>\n";
	}
	$form .= "\t\t<input id='checkoutSubmit' class='checkoutButtons' type='submit' value='Buy Now'>\n";
	$form .= "\t</form>\n";
	$form .= "</fieldset>\n";
	return $form;
}

function createCheckoutButtons() {
	$buttons = "<fieldset ><legend><b>Other Order Options</b></legend>";
	$buttons .= "<p>Press <b>Buy Now</b> to continue, <b>Clear Cart</b> to cancel your order, or <b>Shop More</b> 
to browse more products.<br></p>";
	$buttons .= "<form action='cart.php'>";
	$buttons .= "<input class='checkoutButtons' type='submit' value='Shopping Cart'>";
	$buttons .= "</form>";
	$buttons .= "<form action='clear_cart.php'>";
	$buttons .= "<input class='checkoutButtons' type='submit' value='Clear Cart'>";
	$buttons .= "</form>";
	$buttons .= "<form action='products.php'>";
	$buttons .= "<input class='checkoutButtons' type='submit' value='Shop More'>";
	$buttons .= "</form></fieldset>";
	return $buttons;
}

function checkForm() {
	$spacesRegex = "/\s+/g";
	$nameRegex = "/^[A-Za-z .,'\-]+$/";
	// Taken from https://www.regular-expressions.info/email.html
	$emailRegex = "/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/";
	$addressRegex = "/[^A-Za-z0-9 .,'\-/\r\n]+/m";
	$phoneRegex = "/^\+?614[0-9 ]{2,11}$|^\(?04\)?[0-9 ]{2,11}$/";
	$creditCardRegex = "/^[0-9 ]{12,19}$/";

	// Replace multiple spaces with a single space and trim
	$checkName =  trim(preg_replace($spacesRegex, " ", $_POST['name']));
	$checkEmail =  trim(preg_replace($spacesRegex, " ", $_POST['email']));
	$checkAddress =  trim(preg_replace($spacesRegex, " ", $_POST['address']));
	$checkPhone =  trim(preg_replace($spacesRegex, " ", $_POST['phone']));
	$checkCreditCard =  trim(preg_replace($spacesRegex, " ", $_POST['creditCard']));
	$checkCreditCartExpiryDate =  trim(preg_replace($spacesRegex, " ", $_POST['creditCardExpiryDate']));
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
<div class="pageWrapper" id="checkoutPage">
	<?php require_once("header_script.php"); ?>
	<section class="pageBody">
		<article class="singlePage">
			<main>
				<h1>Checkout Information</h1>
				<?php
				//echo $_SESSION['orderDetails']['finalOrderText'] . "<br>";
				if(isset($_SESSION['checkoutError']['checkoutErrorFound']) && $_SESSION['checkoutError']['checkoutErrorFound']) {
					echo createFormWithError($_SESSION['checkoutError']['checkoutErrorID'], $_SESSION['checkoutError']['checkoutErrorMessage'], $_SESSION['checkoutError']['name'], $_SESSION['checkoutError']['email'], $_SESSION['checkoutError']['address'], $_SESSION['checkoutError']['phone'], $_SESSION['checkoutError']['creditCard'], $_SESSION['checkoutError']['creditCardExpiryDate']);
				} else {
					echo createForm() . "<br>";
				}

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
