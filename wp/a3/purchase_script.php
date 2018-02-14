<?php
/*
1) work out product type
2) display current price
3) display postage options
4) display quantity buttons
5) add to cart button
 */
require_once("functions_script.php");

function getContactText() {
	$text ="<form action=\"contact_us.php\"><input class=\"purchaseButtons\" type=\"submit\" name=\"contactProduction\"";
	$text .= "\t\tvalue=\"Contact Us\">";
	$text .=  "</form>";
	return $text;
}

function getBuyText($serviceID, $productID, $isVideo) {
	$text = "<script type=\"text/javascript\" src=\"js/createCartItem.js\"></script>";
	$text.= "<form action=\"cart.php\" method=\"post\" onsubmit=\"return createCartItem($serviceID, 'quantityText', $isVideo)\">";
	$text.= "\t\t\t\t\t<span id=\"quantityButton\">";
	$text.= "\t\t\t\t\t\t<input id=\"add\" type=\"hidden\" name=\"add\" value=\"true\">";
	$text.= "\t\t\t\t\t\t<input id=\"simplyTarotService\" type=\"radio\" name=\"postageType\" value=\"Australia\" checked=\"true\"> Australia (free)<br>";
	$text.= "\t\t\t\t\t\t<input id=\"simplyTarotService\" type=\"radio\" name=\"postageType\" value=\"International\"> International ($45.00 AUD)<br>";
	$text.= "\t\t\t\t\t\t<input id=\"simplyTarotService\" type=\"hidden\" name=\"id\" value=$productID><br>";
	$text.= "\t\t\t\t\t<label>Amount To Buy:</label><input type=\"button\"";
	$text.= "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  name=\"quantityMinus\" value=\"-\"";
	$text.= "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  id=\"quantityMinus\"";
	$text.= "\t\t\t\t\t\t><input type=\"text\" name=\"quantity\" value=\"0\" id=\"quantityText\"";
	$text.= "\t\t\t\t\t\t><input type=\"button\" name=\"quantityAdd\" value=\"+\" id=\"quantityAdd\">";
	$text.= "\t\t\t\t\t</span><br>";
	$text.= "\t\t<p>Your current total is $<span id=\"subTotal\">0.00</span> AUD</p>";
	$text.= "\t<input id=\"productBuyButton\" class=\"purchaseButtons\" type=\"submit\" value=\"Add To Cart\">";
	$text.= "</form>";
	$text.= "<br>";
	$text.= "<form action=\"contact_us.php\"><input";
	$text.= "\t\tclass=\"purchaseButtons\" type=\"submit\" name=\"contactSimplyTarot\"";
	$text.= "\t\tvalue=\"Contact Us\">";
	$text.= "</form>";
	$text.= "<script src=\"js/quantity.js\"></script>";
	return $text;
}

function setProductPagePricing($productsArray, $productID) {
	if ($productsArray[$productID]['normalPrice'] > 0 && $productsArray[$productID]['salePrice'] > 0) {
		$normalPrice = $productsArray[$productID]['normalPrice'];
		$salePrice = $productsArray[$productID]['salePrice'];
	} elseif ($productsArray[$productID]['normalPrice'] > 0) {
		$normalPrice = $productsArray[$productID]['normalPrice'];
		$salePrice = null;
	} else {
		$normalPrice = null;
		$salePrice = null;
	}

	// Testing Variables
	//showFormattedArray($productsArray);
	//showFormattedArray($productID);
/*	echo "productID: " . $productID . "<br>";
	echo "has a price?<br>";
	if ($normalPrice != null) {
		echo "normal price: " . $normalPrice . "<br>";
		echo "sale price: " . $salePrice . "<br>";
	} else {
		echo "the product has no price<br>";
	}*/

	/* Using this to dynamically set the pricing options of each page. */
	if ($salePrice == null && $normalPrice != null) {
		printf("<p>The product's current price is <b>$<span id=\"price\">%1.2f</span> AUD</b></p>\n", $normalPrice);
	} elseif ($salePrice != null && $normalPrice != null) {
		printf("<p>The product's original price was <b>$%1.2f AUD</b> but is now only <b>$<span id=\"price\">%1.2f</span>AUD</b>!</p>\n", $normalPrice, $salePrice);
	} else {
		echo "<p>Please contact us for a detailed quote.</p>";
	}

	/* Using this to dynamically set the purchasing options of each page. */
	switch($_GET['productID']) {
		case 'videoTransfer':
			echo "<script type=\"text/javascript\" src=\"js/createCartItem.js\"></script>";
			/* !!! WARNING !!!
			The POST method doesn't work with cart.php in PhpStorm because of the built-in web server problem, it works fine
			locally on httpd and remotely on RMIT's httpd
			servers
			*/
			echo getContactText();
			break;
		case 'videoProduction':
			echo getContactText();
			break;
		case 'simplyTarotSetDVD':
			echo getBuyText('simplyTarotService', 'simplyTarotSetDVD', false);
			break;
		case 'simplyTarotSetNoDVD':
			echo getBuyText('simplyTarotService', 'simplyTarotSetNoDVD', false);
			break;
		case 'simplyTarotCandleLarge':
			echo getBuyText('simplyTarotService', 'simplyTarotCandleLarge', false);
			break;
		case 'simplyTarotCandlesSmall':
			echo getBuyText('simplyTarotService', 'simplyTarotCandlesSmall', false);
			break;
		case 'secretsOfTarotSet':
			echo getBuyText('secretsOfTarotService', 'secretsOfTarotSet', false);
			break;
		case 'secretsOfTarotCandleLarge':
			echo getBuyText('secretsOfTarotService', 'secretsOfTarotCandleLarge', false);
			break;
		case 'secretsOfTarotCandlesSmall':
			echo getBuyText('secretsOfTarotService', 'secretsOfTarotCandlesSmall', false);
			break;
	}
}

function getProductPrice($productsArray, $productID, $asInt) {
	if ($productsArray[$productID]['normalPrice'] > 0 && $productsArray[$productID]['salePrice'] > 0) {
		$normalPrice = $productsArray[$productID]['normalPrice'];
		$salePrice = $productsArray[$productID]['salePrice'];
	} elseif ($productsArray[$productID]['normalPrice'] > 0 ) {
		$normalPrice = $productsArray[$productID]['normalPrice'];
		$salePrice = null;
	} else {
		$normalPrice = null;
		$salePrice = null;
	}

	if($asInt) {
		if ($salePrice == null && $normalPrice != null) {
			return $normalPrice;
		} elseif ($salePrice != null && $normalPrice != null) {
			return $salePrice;
		} else {
			return null;
		}
	} else {

		if ($salePrice == null && $normalPrice != null) {
			$returnString = sprintf("The product's current price is <b>$%1.2f AUD</b>\n", $normalPrice);
		} elseif ($salePrice != null && $normalPrice != null) {
			$returnString = sprintf("The product's original price was <b>$%1.2f AUD</b> but is now only <b>$%1.2f</b>!\n", $normalPrice, $salePrice);
		} else {
			$returnString =  "<p>Please contact us for a detailed quote.</p>";
		}
	}
}
?>