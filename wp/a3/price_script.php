<?php
function getElement($elementName, $productsTree) {
	if ($productsTree[$elementName]['price']['hasPrice'] === true) {
		$normalPrice = $productsTree[$elementName]['price']['shopPrice']['normalPrice'];
		$salePrice = $productsTree[$elementName]['price']['shopPrice']['salePrice'];
		$finalPrice = $normalPrice - $salePrice;
	} else {
		$finalPrice = null;
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

	if ($finalPrice === null) {
		echo "<p>Please contact us for a detailed quote.</p>";
	} elseif ($salePrice === '0.00') {
		printf("<p>The product's current price is <b>$%1.2f</b></p>\n", $normalPrice);
	} elseif ($salePrice !== '0.00') {
		printf("<p>The product's original price was <b>$%1.2f</b> but is now only <b>$%1.2f</b>!</p>\n", $normalPrice,
			$finalPrice);
	}
}
?>