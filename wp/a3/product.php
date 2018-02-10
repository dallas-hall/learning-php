<?php
/* Check if the session has already been started. */
if(!isset($_SESSION)){
	session_start();
}
require_once("functions.php");
require_once("product_script.php");
$currentFilename = getFilenameWithoutExtension(__FILE__);

/*showFormattedArray($allProducts);*/
/*showFormattedArray($productsTree);*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--Setting page information, which I learnt in the course textbook and also at https://www.w3schools.com/tags/tag_meta.asp-->
	<!-- using modules for repeated code -->
	<?php require("head.php")?>
	<meta name="description" content="This is the product page for Golden Tree Productions, which sells video
	production services and tarot products and services, such as Simply Tarot and Secrets of Tarot.">
	<title>GTP - Product</title>
</head>
<body>
<div class="pageWrapper" id="productPage">
	<?php require("header.php"); ?>
	<section class="pageBodyDualPage" id="singleProductPage">
		<article class="column1">
			<!--<h2><?php /*echo $productsTree[$_GET['productID']]['productTitle']*/?></h2>-->
			<h1><?php echo $productsTree[PRODUCT_ID]['productTitle']?></h1>
			<article id="aProduct">
				<main>
					<!--
					This free image was sourced at https://www.pexels.com/photo/classic-phonograph-record-retro-tech-157540/
					-->
					<img src="<?php echo $productsTree[PRODUCT_ID]['productImage']?>" width="480" height="270"
						 alt="<?php echo $productsTree[PRODUCT_ID]['productImageText']?>">
					<p><?php echo $productsTree[PRODUCT_ID]['productDescription']?></p>
					<!--NEED A PHP IF STATEMENT HERE TO DIFFERENTIATE PRODUCTS-->
					<p>The price is $<?php echo $productsTree[PRODUCT_ID]['price']?> AUD per video copy.</p>
					<script type="text/javascript" src="js/createCartItem.js"></script>
					<form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post"
						  onsubmit="return createCartItem()">
					<span id="quantityButton">
						<input id="videoTransferService" type="hidden" name="id" value="videoTransfer">
						<!--Splitting across lines with 'broken' tags so no white space nodes are introduced-->
					<label>Amount Of Videos I Have:</label><input type="button"
																  name="quantityMinus" value="-"
																  id="quantityMinus"
						><input type="text" name="quantity" value="0" id="quantityText"
						><input type="button" name="quantityAdd" value="+" id="quantityAdd">
					</span
					><!--NEED A PHP IF STATEMENT HERE TO DIFFERENTIATE PRODUCTS-->
						<br><label>Video Storage Media I Have:
							<select id="transferSource" name="sourceType">
								<option id="vhsTransfer" value="vhs" selected>VHS</option>
								<option id="super8Transfer" value="super8">Super8</option>
							</select></label
						><br><label>Video Storage Media I Want:
							<select id="transferTarget" name="targetType">
								<option id="cdTransfer" value="cd" selected>CD</option>
								<option id="dvdTransfer" value="dvd">DVD</option>
								<option id="usbTransfer" value="usb">USB</option>
								<option id="sdTransfer" value="sd">SD Card</option>
							</select></label><br>
						<input id="productBuyButton" class="videoProductionButtons" type="submit" value="Buy Now">
					</form><br>
					<form action="contact_us.php"><input
								class="videoProductionButtons" type="submit" name="contactProduction"
								value="Contact Us">
					</form>
					<script src="js/quantity.js"></script>
				</main>
			</article>
		</article>
		<aside id="column2">
			<article>
				<h1>Testimonials &amp; Samples</h1>
					<?php
					foreach ($productsTree[PRODUCT_ID]['Testimonials']['Quotes'] as $aKey => $aValuePair) {
						echo "\t\t\t\t<p>$aValuePair</p>\n";
					}
					 ?>
					<?php
					foreach ($productsTree[PRODUCT_ID]['Testimonials']['Samples'] as $aKey => $aValuePair) {
						echo "\t\t\t\t<p>$aValuePair</p>\n";
					}
					?>
			</article>
		</aside>
	</section>
	<?php require("footer.php"); ?>
</div>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
<?php include_once("debug.php"); ?>
</body>
</html>