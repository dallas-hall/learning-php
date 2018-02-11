<?php
// Check if the session has already been started.
if(!isset($_SESSION)){
	session_start();
}
// Load the required scripts
require_once("functions_script.php");
require_once("all_products_script.php");
require_once("price_script_string.php");
require_once("price_script_integer.php");

// Setup the required variables
$currentFilename = getFilenameWithoutExtension(__FILE__);
$addProduct = null;
$productID = null;
$productTitle = null;
$saleQuantity = null;
$productPrice = null;
$postageType = null;
$postagePrice = null;
$errorMessage = null;
$errorFound = false;
$firstVisit = true;
$message = null;

// Check if first time visiting or not
if(isset($_SESSION['cart']) || isset($_POST['add'], $_POST['id'], $_POST['quantity'])) {
	// Setup variables
	$firstVisit = false;

	// Cycle through current current
	if(isset($_SESSION['cart'])) {
		$message .= "<h2>Previous Cart Items</h2>";
		$message .= "<fieldset><legend><b>$productTitle Order</b></legend>You have chosen to buy <b>A BRAND NEW CARRRRRRR.</b></fieldset>";
	}

	// Add new item to cart
	if(isset($_POST['add'], $_POST['id'], $_POST['quantity'])) {
		$addProduct = $_POST['add'];
		$productID = $_POST['id'];
		$productTitle = $productsTree[$_POST['id']]['productTitle'];
		$saleQuantity = $_POST['quantity'];
		$productPrice = getProductPriceInt($_POST['id'], $productsTree);
/*		$postageType = $_POST['postageType'];
		$postagePrice = $productsTree[$_POST['id']]['price']['postagePrice'][]*/
		$orderTotal = sprintf("<br>Your total cost for this order is <b>$%1.2f</b>\n",
			($saleQuantity * $productPrice));

		// Debugging
		/*	$message = "<p>HELLO IM A CART</p><p>$_POST[add] is $addProduct</p><p>$_POST[id] is $productID</p>
					<p>$_POST[quantity] is $saleQuantity</p>";*/

		// Server side checks
		if ($saleQuantity < 1) {
			$errorMessage = "<p>The sale quantity must be greater than or equal to 1.</p>";
			$errorFound = true;
		} else if (!in_array($productID, $allProducts, true)) {
			$errorMessage = "<p>That product is not for sale, please choose one from the shop's page.</p>";
			$errorFound = true;
		}

		// Create order tab
		$message .= "<h2>Current Cart Items</h2>";
		$message .= "<fieldset><legend><b>$productTitle Order</b></legend>You have chosen to buy <b>$saleQuantity x $productTitle";
		if ($saleQuantity > 1) {
			$message .= "'s.</b><br>";
		} else {
			$message .= ".</b><br>";
		}

		// Get product price and order total
		$message .= getProductPriceString($_POST['id'], $productsTree);
		$message .= $orderTotal . "</fieldset>";

		// Add to cart
		$_SESSION['cart'][$_POST['id']]['quantity'] = $_POST['quantity'];
	}




	//header("Location: cart.php");

/*	foreach ($_SESSION['cart'] as $aKey => $aValuePair) {
		$message .= "$aKey and ";
		foreach ($aValuePair as $anotherKey => $anotherValuePair) {
			$message .= "$anotherValuePair<br>";
		}
	}*/
} else {
	$firstVisit = true;
	$message = "Welcome to Golden Tree Production.<br>";
	$message .= "<p>Your shopping cart is empty, please <a href=\"products.php\">visit our shop</a> to purchase items.</p>";
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
				<h1>Your Shopping Cart</h1>
				<?php
				if ($errorFound) {
					echo $errorMessage;
				} else {
					echo $message;
				}
/*				else {
					echo "<fieldset>";
					echo $message;
					echo getProductPriceString($_POST['id'], $productsTree);
					printf("<br>Your total cost for this order is <b>$%1.2f</b>\n",
						($saleQuantity * $productPrice));
					echo "</fieldset>";
				}*/
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