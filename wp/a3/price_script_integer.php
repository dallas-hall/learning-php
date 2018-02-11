<?php
function getProductPriceInt($elementName, $productsTree) {
	if ($productsTree[$elementName]['price']['hasPrice'] === true) {
		$normalPrice = $productsTree[$elementName]['price']['shopPrice']['normalPrice'];
		$salePrice = $productsTree[$elementName]['price']['shopPrice']['salePrice'];
	} else {
		$normalPrice = null;
		$salePrice = null;
	}

	// Testing Variables
/*	echo "productID: " . $_GET['productID'] . "<br>";
	echo "has a price? " . $productsTree[$elementName]['price']['hasPrice'] . "<br>";
	if ($productsTree[$elementName]['price']['hasPrice']) {
		echo "normal price: " . $normalPrice . "<br>";
		echo "sale price: " . $salePrice . "<br>";
		echo "final price: " . $finalPrice . "<br>";
		printf("The product's current price is $%1.2f", $finalPrice);
	} else {
		echo "the product has no price<br>";
	}*/

	if ($normalPrice === null && $salePrice === null) {
		return null;
	} elseif ($salePrice === '0.00') {
		return $normalPrice;
	} elseif ($salePrice !== '0.00') {
		return $salePrice;
	}
}
?>