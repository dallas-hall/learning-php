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
/*$addProduct = null;
$productID = null;
$productTitle = null;
$saleQuantity = null;
$productPrice = null;
$postageType = null;
$postagePrice = null;*/
$message = null;
$errorMessage = null;
$errorFound = false;
$firstVisit = true;

// Create a cumulative total
$_SESSION['orderTotal'] = 0;


// Check for international order
/*if(!isset($_SESSION['internationalOrder'])){
	$_SESSION['internationalOrder'] = false;
}*/

// Functions
function createCartItem($productID, $productTitle, $saleQuantity, $productPrice, $postageType) {
	$_SESSION['cart'][$_POST['id']]['productTitle'] = $productTitle;
	$_SESSION['cart'][$_POST['id']]['saleQuantity'] = $saleQuantity;
	$_SESSION['cart'][$_POST['id']]['productPrice'] = $productPrice;
	$_SESSION['cart'][$_POST['id']]['postageType'] = $postageType;
	//echo "productPrice is $productPrice and orderTotal is $_SESSION[orderTotal]";
}

function getCartItems($productsTree) {
	// Local variables
	$cartItems = null;

	// Process the existing cart items
	foreach ($_SESSION['cart'] as $aKey => $aValuePair) {
		$cartProductID = $aKey;
		$cartProductTitle = null;
		$cartSaleQuantity = null;
		$cartProductPrice = null;
		$cartPostageType = null;
		//echo "id is $aKey<br>";
		foreach ($aValuePair as $anotherKey => $anotherValuePair) {
			//echo "$anotherKey is $anotherValuePair<br>";
			switch($anotherKey) {
				case 'productTitle':
					$cartProductTitle = $anotherValuePair;
					break;
				case 'saleQuantity':
					$cartSaleQuantity = $anotherValuePair;
					break;
				case 'productPrice':
					$cartProductPrice = $anotherValuePair;
					break;
				case 'postageType':
					$cartPostageType = $anotherValuePair;
					break;
			}
		}

		// Create the cart item
		$cartItems .= "<fieldset><legend><b>$cartProductTitle Order</b></legend><br>You have chosen to buy <b>$cartSaleQuantity x 
$cartProductTitle";
		if ($cartSaleQuantity > 1) {
			$cartItems .= "s.</b><br>";
		} else {
			$cartItems .= ".</b><br>";
		}

		// Get product price and order total !!!REMEMBER TO ADD POSTAGE PRICE HERE!!!
		$cartOrderTotal = sprintf("<br>Your total cost for this order is <b>$%1.2f</b>\n",
			($cartSaleQuantity * $cartProductPrice));
		$cartItems .= getProductPriceString($cartProductID, $productsTree);
		$cartItems .= $cartOrderTotal . "</fieldset><br>";
	}
	//print($cartItem);
	return $cartItems;
}

function getPostagePrice() {
	// Local Variables
	$postagePrice = null;
	$isInternationalOrder = false;
	// Global Variables
	global $postagePrices;

	// Outer loop gets the productID array
	foreach($_SESSION['cart'] as $productID => $productArray) {
		// Inner loop gets all the elements from that array
		foreach ($productArray as $arrayKey => $arrayValue) {
			//echo "$arrayKey and $arrayValue<br>";
			if ($arrayKey === 'postageType' && $arrayValue === 'International') {
				$isInternationalOrder = true;
				break;
			}
		}
	}

	if($isInternationalOrder) {
		foreach($postagePrices as $aKey => $aValue) {

			if($aKey === 'international') {
				$postagePrice = $aValue;
				//echo "Type is $aKey and that price is $aValue<br>";
				break;
			}
		}
	} else {
		foreach($postagePrices as $aKey => $aValue) {

			if($aKey === 'domestic') {
				$postagePrice = $aValue;
				//echo "Type is $aKey and that price is $aValue<br>";
				break;
			}
		}
	}
	return $postagePrice;
}

function calculateOrderTotal() {
	// Outer loop gets the productID array
	foreach($_SESSION['cart'] as $productID => $productArray) {
		//echo "$productID and $productArray<br>";
		$saleQuantity = null;
		$productPrice = null;

		// Inner loop gets all the elements from that array
		foreach($productArray as $arrayKey => $arrayValue) {
			//echo "$arrayKey and $arrayValue<br>";
			if($arrayKey === 'saleQuantity') {
				$saleQuantity = $arrayValue;
			} else if ($arrayKey === 'productPrice') {
				$productPrice = $arrayValue;
			}
		}
		$_SESSION['orderTotal'] += ($saleQuantity * $productPrice);
	}
}

function createFinalOrder() {
	if(isset($_SESSION['finalOrderText'])) {
		unset($_SESSION['finalOrderText']);
	}
	$postagePrice = getPostagePrice();
	calculateOrderTotal();
	/*	echo "order total is $_SESSION[orderTotal]<br>";
		echo "postage is $postagePrice";*/
	//$postagePrice = 0;
	$postagePriceFormatted = sprintf("<b>$%1.2f AUD</b>", $postagePrice);
	$totalCostFormatted  = sprintf("<b>$%1.2f AUD</b>", $_SESSION['orderTotal']);
	$totalCostWithPostageFormatted  = sprintf("<b>$%1.2f AUD</b>", ($_SESSION['orderTotal'] + $postagePrice));
	$finalOrder = "<h2>Final Order Information</h2>";
	$finalOrder .= "<fieldset><legend><b>Complete Order Information</b></legend>";
	$finalOrder .= "<p>The total cost of all of your items in this order is $totalCostFormatted.";
	if($postagePrice > 0) {
		$finalOrder .= "<br>International postage was selected, this will cost an additional $postagePriceFormatted</p>";
		$finalOrder .= "The total cost of your order is now $totalCostWithPostageFormatted.";
	} else {
		$finalOrder .= "<br>Domestic postage was selected, this is <b>free</b>!</p>";
	}
	$_SESSION['finalOrderText'] = $finalOrder . "</fieldset>";
	$finalOrder .= "<p>Press <b>Checkout</b> to continue, <b>Clear Cart</b> to cancel your order, or <b>Shop More</b> to browse more 
products.</p>";
	return $finalOrder;
}

function createCartButtons() {
	$cartButtons = createFinalOrder();
	$cartButtons .= "<form action=\"checkout.php\">";
	$cartButtons .= "<input class=\"cartButtons\" type=\"submit\" value=\"Checkout\">";
	$cartButtons .= "</form>";
	$cartButtons .= "<form action=\"clear_cart.php\">";
	$cartButtons .= "<input class=\"cartButtons\" type=\"submit\" value=\"Clear Cart\">";
	$cartButtons .= "</form>";
	$cartButtons .= "<form action=\"products.php\">";
	$cartButtons .= "<input class=\"cartButtons\" type=\"submit\" value=\"Shop More\">";
	$cartButtons .= "</form></fieldset>";
	return $cartButtons;
}

// Check if first time visiting or not
if(isset($_SESSION['cart']) || isset($_POST['add'], $_POST['id'], $_POST['quantity'])) {
	// Setup variables
	$firstVisit = false;

	// Add new item to cart
	if(isset($_POST['add'], $_POST['id'], $_POST['quantity'])) {
		// Local Variables
		$addProduct = $_POST['add'];
		$productID = $_POST['id'];
		$productTitle = $productsTree[$_POST['id']]['productTitle'];
		$saleQuantity = $_POST['quantity'];
		$productPrice = getProductPriceInt($_POST['id'], $productsTree);
		$postageType = $_POST['postageType'];
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

		// Add to cart
		createCartItem($productID, $productTitle, $saleQuantity, $productPrice, $postageType);
	}

	// Cycle through current cart
	if(isset($_SESSION['cart'])) {
		$message = "<h2>Current Cart Items</h2>";
		$message .= getCartItems($productsTree);

	}

	// Add the processing buttons
	$message .= createCartButtons();
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