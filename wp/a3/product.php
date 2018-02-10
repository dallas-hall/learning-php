<?php
/* Check if the session has already been started. */
if (!isset($_SESSION)) {
	session_start();
}
require_once("functions_script.php");
require_once("products_script.php");
$currentFilename = getFilenameWithoutExtension(__FILE__);

/*showFormattedArray($allProducts);*/
/*showFormattedArray($productsTree);*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--Setting page information, which I learnt in the course textbook and also at https://www.w3schools.com/tags/tag_meta.asp-->
	<!-- using modules for repeated code -->
	<?php require("head_script.php") ?>
	<meta name="description" content="This is the product page for Golden Tree Productions, which sells video
	production services and tarot products and services, such as Simply Tarot and Secrets of Tarot.">
	<title>GTP - Product</title>
</head>
<body>
<div class="pageWrapper" id="productPage">
	<?php require("header_script.php"); ?>
	<section class="pageBodyDualPage">
		<article class="column1">
			<main>
				<h1><?php echo $productsTree[PRODUCT_ID]['productTitle'] ?></h1>
				<img src="<?php echo $productsTree[PRODUCT_ID]['productImage'] ?>"
					 width="<?php echo $productsTree[PRODUCT_ID]['productImageWidth'] ?>"
					 height="<?php echo $productsTree[PRODUCT_ID]['productImageHeight'] ?>"
					 alt="<?php echo $productsTree[PRODUCT_ID]['productImageText'] ?>">
				<p><?php echo $productsTree[PRODUCT_ID]['productDescription'] ?></p>
			</main>
		</article>
		<aside class="column2">
			<article>
				<h1>Feedback &amp; Samples</h1>
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
	<section id="purchaseSection">
		<?php require_once("purchase_script.php");?>
	</section>
	<?php require("footer_script.php"); ?>
</div>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
<?php include_once("debug.php"); ?>
</body>
</html>