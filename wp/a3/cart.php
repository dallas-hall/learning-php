<?php
/* Check if the session has already been started. */
if(!isset($_SESSION)){
	session_start();
}
require_once("functions_script.php");
require_once("all_products_script.php");
$currentFilename = getFilenameWithoutExtension(__FILE__);

// Page variables
$addProduct = null;
$productID = null;
$productTitle = null;
$saleQuantity = null;
$productPrice = null;
$postagePrice =  null;
// Video only
$videoSourceType = null;
$videoTargetType = null;

// Script variables
$message = null;
$errorMessage =  null;
$errorFound = false;

// Do something if the customer has cart options
if(isset($_POST['add'], $_POST['id'], $_POST['quantity'], $_POST['sourceType'], $_POST['targetType'])) {
	$addProduct = $_POST['add'];
	$productID = $_POST['id'];
	$productTitle = $productsTree[$_POST['id']]['productTitle'];
	$saleQuantity = $_POST['quantity'];
	//$productPrice = getElementPriceInt("videoTransfer", $productsTree);
	$videoSourceType =  $_POST['sourceType'];
	$videoTargetType = $_POST['targetType'];

/*	$message = "<p>HELLO IM A CART</p><p>$_POST[add] is $addProduct</p><p>$_POST[id] is $productID</p>
		<p>$_POST[quantity] is $saleQuantity</p><p>$_POST[sourceType] is $videoSourceType</p>
		<p>$_POST[targetType] is $videoTargetType</p>";*/
	// server side code is required here to check if
	// - qty is a positive integer (ie 1 or more)
	if($saleQuantity < 1) {
		$errorMessage = "<p>The sale quantity must be greater than or equal to 1.</p>";
		$errorFound = true;
	}

	// - product/service id is valid
	if(!in_array ($productID, $allProducts, true)) {
		$errorMessage = "<p>That product is not for sale, please choose one from the shop's page.</p>";
		$errorFound = true;
	}

	// - product/service option is valid
	$videoSources = ['vhs', 'super8'];
	$videoTargets = ['cd', 'dvd', 'usb', 'sd'];
	if(!in_array ($videoSourceType, $videoSources, true) || !in_array ($videoTargetType, $videoTargets, true)) {
		$errorMessage = "<p>That product option is not for sale, please choose one from the shop's page.</p>";
		$errorFound = true;
	}

	// Update video types
	switch($videoSourceType) {
		case 'vhs':
			$videoSourceType = 'VHS';
			break;
		case 'super8':
			$videoSourceType = 'Super 8';
			break;
	}

	switch($videoTargetType) {
		case 'cd':
			$videoTargetType = 'CD';
			break;
		case 'dvd':
			$videoTargetType = 'DVD';
			break;
		case 'usb':
			$videoTargetType = 'USB';
			break;
		case 'sd':
			$videoTargetType = 'SD Card';
			break;
	}

	if($saleQuantity > 1) {
		$message = "<h2>$productTitle</h2>You have chosen to buy <b>$saleQuantity $productTitle</b>'s.<br>" .
			"The video source is <b>$videoSourceType</b> and it will be transferred to <b>$videoTargetType</b>.<br>";
	} else {
		$message = "<h2>$productTitle</h2>You have chosen to buy <b>$saleQuantity $productTitle.</b><br>" .
			"The video source is <b>$videoSourceType</b> and it will be transferred to <b>$videoTargetType</b>.<br>";
	}

	// Add to cart
	$_SESSION['cart'][$_POST['id']]['quantity'] = $_POST['quantity'];
	//header("Location: cart.php");
}
else if (isset($_POST['add'], $_POST['id'], $_POST['quantity'])) {
	$addProduct = $_POST['add'];
	$productID = $_POST['id'];
	$productTitle = $productsTree[$_POST['id']]['productTitle'];
	$saleQuantity = $_POST['quantity'];
	//$productPrice = getElementPriceInt("videoTransfer", $productsTree);

/*	$message = "<p>HELLO IM A CART</p><p>$_POST[add] is $addProduct</p><p>$_POST[id] is $productID</p>
			<p>$_POST[quantity] is $saleQuantity</p>";*/

	// server side code is required here to check if
	// - qty is a positive integer (ie 1 or more)
	if($saleQuantity < 1) {
		$errorMessage = "<p>The sale quantity must be greater than or equal to 1.</p>";
		$errorFound = true;
	}

	// - product/service id is valid
	if(!in_array ($productID, $allProducts, true)) {
		$errorMessage = "<p>That product is not for sale, please choose one from the shop's page.</p>";
		$errorFound = true;
	}

	if($saleQuantity > 1) {
		$message = "<h1>$productTitle</h1>You have chosen to buy <b>$saleQuantity $productTitle's</b>.";
	} else {
		$message = "<h1>$productTitle</h1>You have chosen to buy <b>$saleQuantity $productTitle</b>.";
	}

	// Add to cart
	$_SESSION['cart'][$_POST['id']]['quantity'] = $_POST['quantity'];
	//header("Location: cart.php");
} else {
	$message = "<p>Your shopping cart is empty, please visit our shop to purchase items.</p>";
}


//
// repeat to add the valid option
//header("Location: cart.php");
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
				<h1>Your Shopping Cart</h1>
				<?php
				if($errorFound) {
					echo "$errorMessage";
				}
				else {
					echo "<fieldset>$message";
					require_once("price_script_string.php");
					echo getElementPriceString($_POST['id'], $productsTree);
					echo "<br>Because of this order's quantity, you will need to pay <b>($saleQuantity * $price)</b>.";
					echo "</fieldset>";
				}
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