<?php
/* Check if the session has already been started. */
if (!isset($_SESSION)) {
	session_start();
}

$spacesRegex = "/\s+/";
$nameRegex = "/^[A-Za-z .,'\-]+$/";
// Taken from https://www.regular-expressions.info/email.html
$emailRegex = "/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/";
$addressRegex = "#[^A-Za-z0-9 .,'\-/\r\n]+#m";
$phoneRegex = "/^\+?614[0-9 ]{2,11}$|^\(?04\)?[0-9 ]{2,11}$/";
$creditCardRegex = "/^[0-9 ]{12,19}$/";

// Replace multiple spaces with a single space and trim
$checkName = trim(preg_replace($spacesRegex, " ", $_POST['name']));
$checkEmail = trim(preg_replace($spacesRegex, " ", $_POST['email']));
$checkAddress = trim(preg_replace($spacesRegex, " ", $_POST['address']));
$checkPhone = trim(preg_replace($spacesRegex, " ", $_POST['phone']));
$checkCreditCard = trim(preg_replace($spacesRegex, " ", $_POST['creditCard']));
$checkCreditCartExpiryDate = trim(preg_replace($spacesRegex, " ", $_POST['creditCardExpiryDate']));

echo $checkName . "<br>";
echo $checkEmail . "<br>";
echo $checkAddress . "<br>";
echo $checkPhone . "<br>";
echo $checkCreditCard . "<br>";
echo $checkCreditCartExpiryDate . "<br>";


//echo trim(preg_replace($spacesRegex, " ", $_POST['name'])) . "<br>";
//echo $checkName . "<br>";

if (!preg_match($nameRegex, $checkName)) {
	//echo 'na TRIPPED';
	$_SESSION['checkoutError']['checkoutErrorFound'] = true;
	$_SESSION['checkoutError']['checkoutErrorID'] = "nameError";
	$_SESSION['checkoutError']['checkoutErrorMessage'] = "Name can only have [A-Za-z .,'-]";
	$_SESSION['checkoutError']['name'] = $_POST['name'];
	$_SESSION['checkoutError']['email'] = $_POST['email'];
	$_SESSION['checkoutError']['address'] = $_POST['address'];
	$_SESSION['checkoutError']['phone'] = $_POST['phone'];
	$_SESSION['checkoutError']['creditCard'] = $_POST['creditCard'];
	$_SESSION['checkoutError']['creditCardExpiryDate'] = $_POST['creditCardExpiryDate'];
	header("Location: checkout.php");
} elseif (!preg_match($emailRegex, $checkEmail)) {
	//echo 'em TRIPPED';
	$_SESSION['checkoutError']['checkoutErrorFound'] = true;
	$_SESSION['checkoutError']['checkoutErrorID'] = "emailError";
	$_SESSION['checkoutError']['checkoutErrorMessage'] = "Please enter a valid email.";
	$_SESSION['checkoutError']['name'] = $_POST['name'];
	$_SESSION['checkoutError']['email'] = $_POST['email'];
	$_SESSION['checkoutError']['address'] = $_POST['address'];
	$_SESSION['checkoutError']['phone'] = $_POST['phone'];
	$_SESSION['checkoutError']['creditCard'] = $_POST['creditCard'];
	$_SESSION['checkoutError']['creditCardExpiryDate'] = $_POST['creditCardExpiryDate'];
	header("Location: checkout.php");
} elseif (preg_match($addressRegex, $checkAddress)) {
	//echo 'ad TRIPPED';
	$_SESSION['checkoutError']['checkoutErrorFound'] = true;
	$_SESSION['checkoutError']['checkoutErrorID'] = "addressError";
	$_SESSION['checkoutError']['checkoutErrorMessage'] = "Address can only have [A-Za-z .,'/\\n-]";
	$_SESSION['checkoutError']['name'] = $_POST['name'];
	$_SESSION['checkoutError']['email'] = $_POST['email'];
	$_SESSION['checkoutError']['address'] = $_POST['address'];
	$_SESSION['checkoutError']['phone'] = $_POST['phone'];
	$_SESSION['checkoutError']['creditCard'] = $_POST['creditCard'];
	$_SESSION['checkoutError']['creditCardExpiryDate'] = $_POST['creditCardExpiryDate'];
	header("Location: checkout.php");
} elseif (!preg_match($phoneRegex, $checkPhone)) {
	//echo 'ph TRIPPED';
	$_SESSION['checkoutError']['checkoutErrorFound'] = true;
	$_SESSION['checkoutError']['checkoutErrorID'] = "phoneError";
	$_SESSION['checkoutError']['checkoutErrorMessage'] = "Phone can only start with +614, 614, 04, or (04) and must be complete.";
	$_SESSION['checkoutError']['name'] = $_POST['name'];
	$_SESSION['checkoutError']['email'] = $_POST['email'];
	$_SESSION['checkoutError']['address'] = $_POST['address'];
	$_SESSION['checkoutError']['phone'] = $_POST['phone'];
	$_SESSION['checkoutError']['creditCard'] = $_POST['creditCard'];
	$_SESSION['checkoutError']['creditCardExpiryDate'] = $_POST['creditCardExpiryDate'];
	header("Location: checkout.php");
} elseif (!preg_match($creditCardRegex, $checkCreditCard)) {
	//echo 'cc TRIPPED';
	$_SESSION['checkoutError']['checkoutErrorFound'] = true;
	$_SESSION['checkoutError']['checkoutErrorID'] = "creditCardError";
	$_SESSION['checkoutError']['checkoutErrorMessage'] = "Credit card number can only be between 12 and 19 numbers.";
	$_SESSION['checkoutError']['name'] = $_POST['name'];
	$_SESSION['checkoutError']['email'] = $_POST['email'];
	$_SESSION['checkoutError']['address'] = $_POST['address'];
	$_SESSION['checkoutError']['phone'] = $_POST['phone'];
	$_SESSION['checkoutError']['creditCard'] = $_POST['creditCard'];
	$_SESSION['checkoutError']['creditCardExpiryDate'] = $_POST['creditCardExpiryDate'];
	header("Location: checkout.php");
} else {
	header("Location: receipt.php");
}

include_once("/home/eh1/e54061/public_html/wp/debug.php");
include_once("debug.php");
?>