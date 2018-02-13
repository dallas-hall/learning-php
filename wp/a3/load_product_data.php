<?php
require_once("functions_script.php");
// The majority of this code was sourced from the textbook

// @@ File Handling @@@
// File path
$relativePath = "files/products.csv";
// See if the file actually exists
if(!file_exists($relativePath)) {
	echo "Can't find $relativePath<br>";
} else {
	echo "Found " . basename($relativePath) . " and it is " . filesize($relativePath) . " bytes<br>";

	// Open the file in read only text mode.
	$fileHandle = fopen($relativePath, "rt");

	// Check if we opened the file
	if (!$fileHandle) {
		echo "We couldn't open $relativePath<br>";
	} else {
		echo "We opened $relativePath<br>";
	}

	// Print the file contents of the open file
	//fpassthru($fileHandle);

	// @@@ Array Creation @@@
	// All valid products
	$allProductIDs = ['videoTransfer', 'videoProduction'
		,'simplyTarotSetDVD', 'simplyTarotSetNoDVD', 'simplyTarotCandleLarge',	'simplyTarotCandlesSmall'
		,'secretsOfTarotSet', 'secretsOfTarotCandleLarge', 'secretsOfTarotCandlesSmall'];

	// Postage prices in AUD
	$postagePrices = array (
		'domestic' => '0.00'
		,'international' => '45.00'
	);

	// Create the array and populate it with product ids that contain arrays
	$allProducts = array();
	foreach($allProductIDs as $index => $productIDs) {
		//echo "$index and  $productIDs<br>";
		$allProducts[$productIDs] = array();
	}

	//showFormattedArray($allProducts);

/*	$counter = 1;
	foreach($allProducts as $productID => $array) {
		echo "$productID => $array<br>";
		$allProducts[$productID]['count'] = $counter;
		$allProducts[$productID]['string'] = "hello world";
		$counter++;
	}*/

	// Read a the csv file - Got the first line idea from https://stackoverflow.com/a/14372764
	$firstLine = true;
	while ($line = fgetcsv($fileHandle)) {
		if($firstLine) {
			//echo "[{$line[0]}, {$line[1]}, {$line[2]}, {$line[3]}, {$line[4]}, {$line[5]}, {$line[6]}, {$line[7]}, {$line[8]}, {$line[9]} {$line[10]}]<br>";
			$firstLine = false;
			continue;
		}

		// Populate the product array
		switch($line[0]) {
			case('videoTransfer'):
				$allProducts['videoTransfer']["productTitle"] = $line[1];
				$allProducts['videoTransfer']["productDescription"] = $line[2];
				$allProducts['videoTransfer']["normalPrice"] = $line[3];
				$allProducts['videoTransfer']["salePrice"] = $line[4];
				$allProducts['videoTransfer']["productImage"] = $line[5];
				$allProducts['videoTransfer']["productImageText"] = $line[6];
				$allProducts['videoTransfer']["productImageWidth"] = $line[7];
				$allProducts['videoTransfer']["productImageHeight"] = $line[8];
				$allProducts['videoTransfer']["customerQuotes"] = $line[9];
				$allProducts['videoTransfer']["workSamples"] = $line[10];
				break;
			case('videoProduction'):
				$allProducts['videoProduction']["productTitle"] = $line[1];
				$allProducts['videoProduction']["productDescription"] = $line[2];
				$allProducts['videoProduction']["normalPrice"] = $line[3];
				$allProducts['videoProduction']["salePrice"] = $line[4];
				$allProducts['videoProduction']["productImage"] = $line[5];
				$allProducts['videoProduction']["productImageText"] = $line[6];
				$allProducts['videoProduction']["productImageWidth"] = $line[7];
				$allProducts['videoProduction']["productImageHeight"] = $line[8];
				$allProducts['videoProduction']["customerQuotes"] = $line[9];
				$allProducts['videoProduction']["workSamples"] = $line[10];
				break;
			case('simplyTarotSetDVD'):
				$allProducts['simplyTarotSetDVD']["productTitle"] = $line[1];
				$allProducts['simplyTarotSetDVD']["productDescription"] = $line[2];
				$allProducts['simplyTarotSetDVD']["normalPrice"] = $line[3];
				$allProducts['simplyTarotSetDVD']["salePrice"] = $line[4];
				$allProducts['simplyTarotSetDVD']["productImage"] = $line[5];
				$allProducts['simplyTarotSetDVD']["productImageText"] = $line[6];
				$allProducts['simplyTarotSetDVD']["productImageWidth"] = $line[7];
				$allProducts['simplyTarotSetDVD']["productImageHeight"] = $line[8];
				$allProducts['simplyTarotSetDVD']["customerQuotes"] = $line[9];
				$allProducts['simplyTarotSetDVD']["workSamples"] = $line[10];
				break;
			case('simplyTarotSetNoDVD'):
				$allProducts['simplyTarotSetNoDVD']["productTitle"] = $line[1];
				$allProducts['simplyTarotSetNoDVD']["productDescription"] = $line[2];
				$allProducts['simplyTarotSetNoDVD']["normalPrice"] = $line[3];
				$allProducts['simplyTarotSetNoDVD']["salePrice"] = $line[4];
				$allProducts['simplyTarotSetNoDVD']["productImage"] = $line[5];
				$allProducts['simplyTarotSetNoDVD']["productImageText"] = $line[6];
				$allProducts['simplyTarotSetNoDVD']["productImageWidth"] = $line[7];
				$allProducts['simplyTarotSetNoDVD']["productImageHeight"] = $line[8];
				$allProducts['simplyTarotSetNoDVD']["customerQuotes"] = $line[9];
				$allProducts['simplyTarotSetNoDVD']["workSamples"] = $line[10];
				break;
			case('simplyTarotCandleLarge'):
				$allProducts['simplyTarotCandleLarge']["productTitle"] = $line[1];
				$allProducts['simplyTarotCandleLarge']["productDescription"] = $line[2];
				$allProducts['simplyTarotCandleLarge']["normalPrice"] = $line[3];
				$allProducts['simplyTarotCandleLarge']["salePrice"] = $line[4];
				$allProducts['simplyTarotCandleLarge']["productImage"] = $line[5];
				$allProducts['simplyTarotCandleLarge']["productImageText"] = $line[6];
				$allProducts['simplyTarotCandleLarge']["productImageWidth"] = $line[7];
				$allProducts['simplyTarotCandleLarge']["productImageHeight"] = $line[8];
				$allProducts['simplyTarotCandleLarge']["customerQuotes"] = $line[9];
				$allProducts['simplyTarotCandleLarge']["workSamples"] = $line[10];
				break;
			case('simplyTarotCandlesSmall'):
				$allProducts['simplyTarotCandlesSmall']["productTitle"] = $line[1];
				$allProducts['simplyTarotCandlesSmall']["productDescription"] = $line[2];
				$allProducts['simplyTarotCandlesSmall']["normalPrice"] = $line[3];
				$allProducts['simplyTarotCandlesSmall']["salePrice"] = $line[4];
				$allProducts['simplyTarotCandlesSmall']["productImage"] = $line[5];
				$allProducts['simplyTarotCandlesSmall']["productImageText"] = $line[6];
				$allProducts['simplyTarotCandlesSmall']["productImageWidth"] = $line[7];
				$allProducts['simplyTarotCandlesSmall']["productImageHeight"] = $line[8];
				$allProducts['simplyTarotCandlesSmall']["customerQuotes"] = $line[9];
				$allProducts['simplyTarotCandlesSmall']["workSamples"] = $line[10];
				break;
			case('secretsOfTarotSet'):
				$allProducts['secretsOfTarotSet']["productTitle"] = $line[1];
				$allProducts['secretsOfTarotSet']["productDescription"] = $line[2];
				$allProducts['secretsOfTarotSet']["normalPrice"] = $line[3];
				$allProducts['secretsOfTarotSet']["salePrice"] = $line[4];
				$allProducts['secretsOfTarotSet']["productImage"] = $line[5];
				$allProducts['secretsOfTarotSet']["productImageText"] = $line[6];
				$allProducts['secretsOfTarotSet']["productImageWidth"] = $line[7];
				$allProducts['secretsOfTarotSet']["productImageHeight"] = $line[8];
				$allProducts['secretsOfTarotSet']["customerQuotes"] = $line[9];
				$allProducts['secretsOfTarotSet']["workSamples"] = $line[10];
				break;
			case('secretsOfTarotCandleLarge'):
				$allProducts['secretsOfTarotCandleLarge']["productTitle"] = $line[1];
				$allProducts['secretsOfTarotCandleLarge']["productDescription"] = $line[2];
				$allProducts['secretsOfTarotCandleLarge']["normalPrice"] = $line[3];
				$allProducts['secretsOfTarotCandleLarge']["salePrice"] = $line[4];
				$allProducts['secretsOfTarotCandleLarge']["productImage"] = $line[5];
				$allProducts['secretsOfTarotCandleLarge']["productImageText"] = $line[6];
				$allProducts['secretsOfTarotCandleLarge']["productImageWidth"] = $line[7];
				$allProducts['secretsOfTarotCandleLarge']["productImageHeight"] = $line[8];
				$allProducts['secretsOfTarotCandleLarge']["customerQuotes"] = $line[9];
				$allProducts['secretsOfTarotCandleLarge']["workSamples"] = $line[10];
				break;
			case('secretsOfTarotCandlesSmall'):
				$allProducts['secretsOfTarotCandlesSmall']["productTitle"] = $line[1];
				$allProducts['secretsOfTarotCandlesSmall']["productDescription"] = $line[2];
				$allProducts['secretsOfTarotCandlesSmall']["normalPrice"] = $line[3];
				$allProducts['secretsOfTarotCandlesSmall']["salePrice"] = $line[4];
				$allProducts['secretsOfTarotCandlesSmall']["productImage"] = $line[5];
				$allProducts['secretsOfTarotCandlesSmall']["productImageText"] = $line[6];
				$allProducts['secretsOfTarotCandlesSmall']["productImageWidth"] = $line[7];
				$allProducts['secretsOfTarotCandlesSmall']["productImageHeight"] = $line[8];
				$allProducts['secretsOfTarotCandlesSmall']["customerQuotes"] = $line[9];
				$allProducts['secretsOfTarotCandlesSmall']["workSamples"] = $line[10];
				break;
		}
	}
	//echo "Product ID: {$line[0]} Product Title: {$line[1]} Normal Price: {$line[2]} Sale Price: {$line[3]}<br>";

	//showFormattedArray($allProducts);

	// Try to close the file
	fclose($fileHandle);
}
?>