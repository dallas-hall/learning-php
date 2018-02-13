<?php
// Check if the session has already been started.
if(!isset($_SESSION)){
	session_start();
}

// Import all the product data
require_once("load_product_data.php");

// The idea of this was taken from Trevor's video that he posted onto the discussion forum
define('PRODUCT_ID', $_GET['productID']);

if(!isset($_GET['productID']) || !in_array (PRODUCT_ID, $allProductIDs, true)) {
	header('Location: products.php');
}
//echo PRODUCT_ID;
?>