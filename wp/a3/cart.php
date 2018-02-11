<?php
/* Check if the session has already been started. */
if(!isset($_SESSION)){
	session_start();
}
require_once("functions_script.php");
require_once("all_products_script.php");
require_once("price_script_string.php");
require_once("price_script_integer.php");
$currentFilename = getFilenameWithoutExtension(__FILE__);
$addProduct = null;
$productID = null;
$productTitle = null;
$saleQuantity = null;
$productPrice = null;
$videoSourceType = null;
$videoTargetType = null;
$errorMessage = null;
$errorFound = false;
$firstVisit = true;
$message = null;

// Check if first time visting
if(isset($_SESSION['cart'])) {
	$firstVisit = false;
	$message = "WELCOME BACK<br>";
	foreach ($_SESSION['cart'] as $aKey => $aValuePair) {
		$message .= "$aKey and ";
		foreach ($aValuePair as $anotherKey => $anotherValuePair) {
			$message .= "$anotherValuePair<br>";
		}
	}
} else {
	$firstVisit = true;
	$message = "WELCOME!";
}
echo $message;

// Do something if the customer has cart options
if(isset($_POST['add'], $_POST['id'], $_POST['quantity'], $_POST['sourceType'], $_POST['targetType'])) {
	$addProduct = $_POST['add'];
	$productID = $_POST['id'];
	$productTitle = $productsTree[$_POST['id']]['productTitle'];
	$saleQuantity = $_POST['quantity'];
	$productPrice = getProductPriceInt($_POST['id'], $productsTree);
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

	$message = "<legend><b>$productTitle Order</b></legend>You have chosen to buy <b>$saleQuantity x $productTitle";
	if($saleQuantity > 1) {
		$message .= "'s.</b><br>The video sources are <b>$videoSourceType</b> and they will be transferred to <b>$videoTargetType</b>.<br>";
	} else {
		$message .= ".</b><br>The video source is <b>$videoSourceType</b> and it will be transferred to <b>$videoTargetType</b>.<br>";
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
	$productPrice = getProductPriceInt($_POST['id'], $productsTree);

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

	$message = "<legend><b>$productTitle Order</b></legend>You have chosen to buy <b>$saleQuantity x $productTitle";
	if($saleQuantity > 1) {
		$message .= "'s.</b><br>";
	} else {
		$message .= ".</b><br>";
	}

	// Add to cart
	$_SESSION['cart'][$_POST['id']]['quantity'] = $_POST['quantity'];
	//header("Location: cart.php");
} elseif ($firstVisit) {
	$message = "<p>Your shopping cart is empty, please <a href=\"products.php\">visit our shop</a> to purchase items.</p>";
} else


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
				if ($firstVisit) {
					echo $message;
				} else if($errorFound) {
					echo "$errorMessage";
				}
				else {
					echo "<fieldset>";
					echo $message;
					echo getProductPriceString($_POST['id'], $productsTree);
					printf("<br>Your total cost for this order is <b>$%1.2f</b>\n",
						($saleQuantity * $productPrice));
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