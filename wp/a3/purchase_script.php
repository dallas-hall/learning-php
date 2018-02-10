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
	$finalPrice = $normalPrice - $salePrice;
} else {
	$finalPrice = null;
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

/* Using this to set the purchasing options dynamically for each page*/
if ($finalPrice === null) {
	echo "<p>Please contact us for a detailed quote.</p>";
} else {
	printf("<p>The product's current price is $%1.2f</p>\n", $finalPrice);
}
switch($_GET['productID']) {
	case 'videoTransfer':
		echo "<script type=\"text/javascript\" src=\"js/createCartItem.js\"></script>";
		echo "<form action=\"https://titan.csit.rmit.edu.au/~e54061/wp/processing.php\" method=\"post\"";
		echo "\t  onsubmit=\"return createCartItem()\">";
		echo "\t\t\t\t\t<span id=\"quantityButton\">";
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
		echo "\t\t</select></label><br><br>";
		echo "\t<input id=\"productBuyButton\" class=\"purchaseButtons\" type=\"submit\" value=\"Buy Now\">";
		echo "</form>";
		echo "<br>";
		echo "<form action=\"contact_us.php\"><input";
		echo "\t\tclass=\"videoProductionButtons\" type=\"submit\" name=\"contactProduction\"";
		echo "\t\tvalue=\"Contact Us\">";
		echo "</form>";
		echo "<script src=\"js/quantity.js\"></script>";
		break;
	case 'videoProduction':
		echo "<form action=\"contact_us.php\"><input";
		echo "\t\tclass=\"purchaseButtons\" type=\"submit\" name=\"contactProduction\"";
		echo "\t\tvalue=\"Contact Us\">";
		echo "</form>";
		break;
	case 'simplyTarotSetDVD':

		break;
	case 'simplyTarotSetNoDVD':

		break;
	case 'simplyTarotCandleLarge':

		break;
	case 'simplyTarotCandlesSmall':

		break;
	case 'secretsOfTarotSet':

		break;
	case 'secretsOfTarotCandleLarge':

		break;
	case 'secretsOfTarotCandlesSmall':

		break;
}

?>