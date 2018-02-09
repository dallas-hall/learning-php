<?php
	/* The idea of this was taken from Trevor's video that he posted onto the discussion forum */
	define(PRODUCT_ID, $_GET['productID']);
	$allProducts = ['videoTransfer', 'videoProduction', 'simplyTarotSets', 'simplyTarotSetsNoVD', 'simplyTarotCandles', 'secretsOfTarotSet', 'secretsOfTarotCandles'];

	if(!isset($_GET[productID]) || !in_array(PRODUCT_ID, $allProducts, true)) {
		header('Location: products.php');
	}
	/*echo PRODUCT_ID;*/

	$productsTree = array(
		'video1' => array(
			'productTitle' => 'Video Transfer'
			,'productDescription' => 'In today’s fast moving world our lives move so fast and memories fade just as quick. We all have some old tapes locked in a cupboard that we are going to do something with. Well today is the day . Get them out sort through them. What is special and you want to keep for future generations. They make a lovely gift to give. Being able to share memories from family history, special occasions, weddings, christenings, or even the family just having fun. We can transfer old VHS and Super 8 to CD, DVD, SD Card, or USB memory stick.'
			,

		)
	)
?>