<?php
/*
1) work out product type
2) display current price
3) display postage options
4) display quantity buttons
5) add to cart button
 */

if ($productsTree[PRODUCT_ID]['price']['hasPrice'] === true) {
	$normalPrice = $productsTree[PRODUCT_ID]['price']['shopPrice']['normalPrice'];
	$salePrice = $productsTree[PRODUCT_ID]['price']['shopPrice']['salePrice'];
} else {
	$normalPrice = null;
	$salePrice = null;
}

// Testing Variables
/*
echo "productID: " . $_GET['productID'] . "<br>";
echo "has a price? " . $productsTree[PRODUCT_ID]['price']['hasPrice'] . "<br>";
if ($productsTree[PRODUCT_ID]['price']['hasPrice']) {
	echo "normal price: " . $normalPrice . "<br>";
	echo "sale price: " . $salePrice . "<br>";
	echo "final price: " . $finalPrice . "<br>";
	printf("The product's current price is $%1.2f", $finalPrice);
} else {
	echo "the product has no price<br>";
}*/

/* Using this to dynamically set the pricing options of each page. */
if ($normalPrice === null && $salePrice === null) {
	echo "<p>Please contact us for a detailed quote.</p>";
} elseif ($salePrice === '0.00') {
	printf("<p>The product's current price is <b>$<span id=\"price\">%1.2f</span></b></p>\n", $normalPrice);
} elseif ($salePrice !== '0.00') {
	printf("<p>The product's original price was <b>$%1.2f</b> but is now only <b>$<span id=\"price\">%1.2f</span></b>!</p>\n",
		$normalPrice,
		$salePrice);
}

/* Using this to dynamically set the purchasing options of each page. */
switch($_GET['productID']) {
	case 'videoTransfer':
		echo "<script type=\"text/javascript\" src=\"js/createCartItem.js\"></script>";
/* !!! WARNING !!!
The POST method doesn't work with cart.php in PhpStorm because of the built-in web server problem, it works fine
locally on httpd and remotely on RMIT
servers
*/
/*		echo "<form action=\"cart.php\" method=\"post\" onsubmit=\"return createCartItem('videoTransferService',
			'quantityText',false)\">";
		echo "\t\t\t\t\t<span id=\"quantityButton\">";
		echo "\t\t\t\t\t\t<input id=\"add\" type=\"hidden\" name=\"add\" value=\"true\">";
		echo "\t\t\t\t\t\t<input id=\"videoTransferService\" type=\"hidden\" name=\"id\" value=\"videoTransfer\">";
		echo "\t\t\t\t\t<label>Amount Of Videos I Have:</label><input type=\"button\"";
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  name=\"quantityMinus\" value=\"-\"";
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  id=\"quantityMinus\"";
		echo "\t\t\t\t\t\t><input type=\"text\" name=\"quantity\" value=\"0\" id=\"quantityText\"";
		echo "\t\t\t\t\t\t><input type=\"button\" name=\"quantityAdd\" value=\"+\" id=\"quantityAdd\">";
		echo "\t\t\t\t\t</span>";
		echo "\t<br><label>Video Storage Media I Have:";
		echo "\t\t<select id=\"transferSource\" name=\"sourceType\">";
		echo "\t\t\t<option id=\"vhsTransfer\" value=\"vhs\" selected>VHS</option>";
		echo "\t\t\t<option id=\"super8Transfer\" value=\"super8\">Super8</option>";
		echo "\t\t</select></label";
		echo "\t><br><label>Video Storage Media I Want:";
		echo "\t\t<select id=\"transferTarget\" name=\"targetType\">";
		echo "\t\t\t<option id=\"cdTransfer\" value=\"cd\" selected>CD</option>";
		echo "\t\t\t<option id=\"dvdTransfer\" value=\"dvd\">DVD</option>";
		echo "\t\t\t<option id=\"usbTransfer\" value=\"usb\">USB</option>";
		echo "\t\t\t<option id=\"sdTransfer\" value=\"sd\">SD Card</option>";
		echo "\t\t</select></label>";
		echo "\t\t<p>Your current total is $<span id=\"subTotal\">0.00</span></p>";
		echo "\t<input id=\"productBuyButton\" class=\"purchaseButtons\" type=\"submit\" value=\"Add To Cart\">";
		echo "</form>";
		echo "<br>";*/
		echo "<form action=\"contact_us.php\"><input class=\"purchaseButtons\" type=\"submit\" name=\"contactProduction\"";
		echo "\t\tvalue=\"Contact Us\">";
		echo "</form>";
		//echo "<script src=\"js/quantity.js\"></script>";
		break;
	case 'videoProduction':
		echo "<form action=\"contact_us.php\"><input class=\"purchaseButtons\" type=\"submit\" name=\"contactProduction\"";
		echo "\t\tvalue=\"Contact Us\">";
		echo "</form>";
		break;
	case 'simplyTarotSetDVD':
		echo "<script type=\"text/javascript\" src=\"js/createCartItem.js\"></script>";
		echo "<form action=\"cart.php\" method=\"post\" onsubmit=\"return createCartItem('simplyTarotService', 'quantityText', false)\">";
		echo "\t\t\t\t\t<span id=\"quantityButton\">";
		echo "\t\t\t\t\t\t<input id=\"add\" type=\"hidden\" name=\"add\" value=\"true\">";
		echo "\t\t\t\t\t\t<input id=\"simplyTarotService\" type=\"hidden\" name=\"id\" value=\"simplyTarotSetDVD\">";
		echo "\t\t\t\t\t<label>Amount To Buy:</label><input type=\"button\"";
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  name=\"quantityMinus\" value=\"-\"";
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  id=\"quantityMinus\"";
		echo "\t\t\t\t\t\t><input type=\"text\" name=\"quantity\" value=\"0\" id=\"quantityText\"";
		echo "\t\t\t\t\t\t><input type=\"button\" name=\"quantityAdd\" value=\"+\" id=\"quantityAdd\">";
		echo "\t\t\t\t\t</span><br>";
		echo "\t\t<p>Your current total is $<span id=\"subTotal\">0.00</span></p>";
		echo "\t<input id=\"productBuyButton\" class=\"purchaseButtons\" type=\"submit\" value=\"Add To Cart\">";
		echo "</form>";
		echo "<br>";
		echo "<form action=\"contact_us.php\"><input";
		echo "\t\tclass=\"purchaseButtons\" type=\"submit\" name=\"contactSimplyTarot\"";
		echo "\t\tvalue=\"Contact Us\">";
		echo "</form>";
		echo "<script src=\"js/quantity.js\"></script>";
		break;
	case 'simplyTarotSetNoDVD':
		echo "<script type=\"text/javascript\" src=\"js/createCartItem.js\"></script>";
		echo "<form action=\"cart.php\" method=\"post\"";
		echo "\t  onsubmit=\"return createCartItem('simplyTarotService', 'quantityText', false)\">";
		echo "\t\t\t\t\t<span id=\"quantityButton\">";
		echo "\t\t\t\t\t\t<input id=\"add\" type=\"hidden\" name=\"add\" value=\"true\">";
		echo "\t\t\t\t\t\t<input id=\"simplyTarotService\" type=\"hidden\" name=\"id\" value=\"simplyTarotSetNoDVD\">";
		echo "\t\t\t\t\t<label>Amount To Buy:</label><input type=\"button\"";
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  name=\"quantityMinus\" value=\"-\"";
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  id=\"quantityMinus\"";
		echo "\t\t\t\t\t\t><input type=\"text\" name=\"quantity\" value=\"0\" id=\"quantityText\"";
		echo "\t\t\t\t\t\t><input type=\"button\" name=\"quantityAdd\" value=\"+\" id=\"quantityAdd\">";
		echo "\t\t\t\t\t</span><br>";
		echo "\t\t<p>Your current total is $<span id=\"subTotal\">0.00</span></p>";
		echo "\t<input id=\"productBuyButton\" class=\"purchaseButtons\" type=\"submit\" value=\"Add To Cart\">";
		echo "</form>";
		echo "<br>";
		echo "<form action=\"contact_us.php\"><input";
		echo "\t\tclass=\"purchaseButtons\" type=\"submit\" name=\"contactSimplyTarot\"";
		echo "\t\tvalue=\"Contact Us\">";
		echo "</form>";
		echo "<script src=\"js/quantity.js\"></script>";
		break;
	case 'simplyTarotCandleLarge':
		echo "<script type=\"text/javascript\" src=\"js/createCartItem.js\"></script>";
		echo "<form action=\"cart.php\" method=\"post\"";
		echo "\t  onsubmit=\"return createCartItem('simplyTarotService', 'quantityText', false)\">";
		echo "\t\t\t\t\t<span id=\"quantityButton\">";
		echo "\t\t\t\t\t\t<input id=\"add\" type=\"hidden\" name=\"add\" value=\"true\">";
		echo "\t\t\t\t\t\t<input id=\"simplyTarotService\" type=\"hidden\" name=\"id\" value=\"simplyTarotCandleLarge\">";
		echo "\t\t\t\t\t<label>Amount To Buy:</label><input type=\"button\"";
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  name=\"quantityMinus\" value=\"-\"";
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  id=\"quantityMinus\"";
		echo "\t\t\t\t\t\t><input type=\"text\" name=\"quantity\" value=\"0\" id=\"quantityText\"";
		echo "\t\t\t\t\t\t><input type=\"button\" name=\"quantityAdd\" value=\"+\" id=\"quantityAdd\">";
		echo "\t\t\t\t\t</span><br>";
		echo "\t\t<p>Your current total is $<span id=\"subTotal\">0.00</span></p>";
		echo "\t<input id=\"productBuyButton\" class=\"purchaseButtons\" type=\"submit\" value=\"Add To Cart\">";
		echo "</form>";
		echo "<br>";
		echo "<form action=\"contact_us.php\"><input";
		echo "\t\tclass=\"purchaseButtons\" type=\"submit\" name=\"contactSimplyTarot\"";
		echo "\t\tvalue=\"Contact Us\">";
		echo "</form>";
		echo "<script src=\"js/quantity.js\"></script>";
		break;
	case 'simplyTarotCandlesSmall':
		echo "<script type=\"text/javascript\" src=\"js/createCartItem.js\"></script>";
		echo "<form action=\"cart.php\" method=\"post\"";
		echo "\t  onsubmit=\"return createCartItem('simplyTarotService', 'quantityText', false)\">";
		echo "\t\t\t\t\t<span id=\"quantityButton\">";
		echo "\t\t\t\t\t\t<input id=\"add\" type=\"hidden\" name=\"add\" value=\"true\">";
		echo "\t\t\t\t\t\t<input id=\"simplyTarotService\" type=\"hidden\" name=\"id\" value=\"simplyTarotCandlesSmall\">";
		echo "\t\t\t\t\t<label>Amount To Buy:</label><input type=\"button\"";
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  name=\"quantityMinus\" value=\"-\"";
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  id=\"quantityMinus\"";
		echo "\t\t\t\t\t\t><input type=\"text\" name=\"quantity\" value=\"0\" id=\"quantityText\"";
		echo "\t\t\t\t\t\t><input type=\"button\" name=\"quantityAdd\" value=\"+\" id=\"quantityAdd\">";
		echo "\t\t\t\t\t</span><br>";
		echo "\t\t<p>Your current total is $<span id=\"subTotal\">0.00</span></p>";
		echo "\t<input id=\"productBuyButton\" class=\"purchaseButtons\" type=\"submit\" value=\"Add To Cart\">";
		echo "</form>";
		echo "<br>";
		echo "<form action=\"contact_us.php\"><input";
		echo "\t\tclass=\"purchaseButtons\" type=\"submit\" name=\"contactSimplyTarot\"";
		echo "\t\tvalue=\"Contact Us\">";
		echo "</form>";
		echo "<script src=\"js/quantity.js\"></script>";
		break;
	case 'secretsOfTarotSet':
		echo "<script type=\"text/javascript\" src=\"js/createCartItem.js\"></script>";
		echo "<form action=\"cart.php\" method=\"post\"";
		echo "\t  onsubmit=\"return createCartItem('secretsOfTarotService', 'quantityText', false)\">";
		echo "\t\t\t\t\t<span id=\"quantityButton\">";
		echo "\t\t\t\t\t\t<input id=\"add\" type=\"hidden\" name=\"add\" value=\"true\">";
		echo "\t\t\t\t\t\t<input id=\"secretsOfTarotService\" type=\"hidden\" name=\"id\" value=\"secretsOfTarotSet\">";
		echo "\t\t\t\t\t<label>Amount To Buy:</label><input type=\"button\"";
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  name=\"quantityMinus\" value=\"-\"";
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  id=\"quantityMinus\"";
		echo "\t\t\t\t\t\t><input type=\"text\" name=\"quantity\" value=\"0\" id=\"quantityText\"";
		echo "\t\t\t\t\t\t><input type=\"button\" name=\"quantityAdd\" value=\"+\" id=\"quantityAdd\">";
		echo "\t\t\t\t\t</span><br>";
		echo "\t\t<p>Your current total is $<span id=\"subTotal\">0.00</span></p>";
		echo "\t<input id=\"productBuyButton\" class=\"purchaseButtons\" type=\"submit\" value=\"Add To Cart\">";
		echo "</form>";
		echo "<br>";
		echo "<form action=\"contact_us.php\"><input";
		echo "\t\tclass=\"purchaseButtons\" type=\"submit\" name=\"contactSimplyTarot\"";
		echo "\t\tvalue=\"Contact Us\">";
		echo "</form>";
		echo "<script src=\"js/quantity.js\"></script>";
		break;
	case 'secretsOfTarotCandleLarge':
		echo "<script type=\"text/javascript\" src=\"js/createCartItem.js\"></script>";
		echo "<form action=\"cart.php\" method=\"post\"";
		echo "\t  onsubmit=\"return createCartItem('secretsOfTarotService', 'quantityText', false)\">";
		echo "\t\t\t\t\t<span id=\"quantityButton\">";
		echo "\t\t\t\t\t\t<input id=\"add\" type=\"hidden\" name=\"add\" value=\"true\">";
		echo "\t\t\t\t\t\t<input id=\"secretsOfTarotService\" type=\"hidden\" name=\"id\" value=\"secretsOfTarotCandleLarge\">";
		echo "\t\t\t\t\t<label>Amount To Buy:</label><input type=\"button\"";
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  name=\"quantityMinus\" value=\"-\"";
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  id=\"quantityMinus\"";
		echo "\t\t\t\t\t\t><input type=\"text\" name=\"quantity\" value=\"0\" id=\"quantityText\"";
		echo "\t\t\t\t\t\t><input type=\"button\" name=\"quantityAdd\" value=\"+\" id=\"quantityAdd\">";
		echo "\t\t\t\t\t</span><br>";
		echo "\t\t<p>Your current total is $<span id=\"subTotal\">0.00</span></p>";
		echo "\t<input id=\"productBuyButton\" class=\"purchaseButtons\" type=\"submit\" value=\"Add To Cart\">";
		echo "</form>";
		echo "<br>";
		echo "<form action=\"contact_us.php\"><input";
		echo "\t\tclass=\"purchaseButtons\" type=\"submit\" name=\"contactSimplyTarot\"";
		echo "\t\tvalue=\"Contact Us\">";
		echo "</form>";
		echo "<script src=\"js/quantity.js\"></script>";
		break;
	case 'secretsOfTarotCandlesSmall':
		echo "<script type=\"text/javascript\" src=\"js/createCartItem.js\"></script>";
		echo "<form action=\"cart.php\" method=\"post\"";
		echo "\t  onsubmit=\"return createCartItem('secretsOfTarotService', 'quantityText', false)\">";
		echo "\t\t\t\t\t<span id=\"quantityButton\">";
		echo "\t\t\t\t\t\t<input id=\"add\" type=\"hidden\" name=\"add\" value=\"true\">";
		echo "\t\t\t\t\t\t<input id=\"secretsOfTarotService\" type=\"hidden\" name=\"id\" value=\"secretsOfTarotCandlesSmall\">";
		echo "\t\t\t\t\t<label>Amount To Buy:</label><input type=\"button\"";
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  name=\"quantityMinus\" value=\"-\"";
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  id=\"quantityMinus\"";
		echo "\t\t\t\t\t\t><input type=\"text\" name=\"quantity\" value=\"0\" id=\"quantityText\"";
		echo "\t\t\t\t\t\t><input type=\"button\" name=\"quantityAdd\" value=\"+\" id=\"quantityAdd\">";
		echo "\t\t\t\t\t</span><br>";
		echo "\t\t<p>Your current total is $<span id=\"subTotal\">0.00</span></p>";
		echo "\t<input id=\"productBuyButton\" class=\"purchaseButtons\" type=\"submit\" value=\"Add To Cart\">";
		echo "</form>";
		echo "<br>";
		echo "<form action=\"contact_us.php\"><input";
		echo "\t\tclass=\"purchaseButtons\" type=\"submit\" name=\"contactSimplyTarot\"";
		echo "\t\tvalue=\"Contact Us\">";
		echo "</form>";
		echo "<script src=\"js/quantity.js\"></script>";
		break;
}
?>