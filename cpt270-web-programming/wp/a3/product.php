<?php
/* Check if the session has already been started. */
if (!isset($_SESSION)) {
	session_start();
}
require_once("functions_script.php");
require_once("product_id_script.php");
require_once("purchase_script.php");
$currentFilename = getFilenameWithoutExtension(__FILE__);

/*showFormattedArray($allProducts);*/
/*showFormattedArray($productsTree);*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--Setting page information, which I learnt in the course textbook and also at https://www.w3schools.com/tags/tag_meta.asp-->
	<!-- using modules for repeated code -->
	<?php require_once("head_script.php") ?>
</head>
<body>
<div class="pageWrapper" id="productPage">
	<?php require_once("header_script.php"); ?>
	<section class="pageBodyDualPage">
		<article class="column1">
			<main>
				<h1><?php echo $allProducts[PRODUCT_ID]['productTitle'] ?></h1>
				<img src="<?php echo $allProducts[PRODUCT_ID]['productImage']; ?>"
					 width="<?php echo $allProducts[PRODUCT_ID]['productImageWidth']; ?>"
					 height="<?php echo $allProducts[PRODUCT_ID]['productImageHeight']; ?>"
					 alt="<?php echo $allProducts[PRODUCT_ID]['productImageText']; ?>">
				<?php echo $allProducts[PRODUCT_ID]['productDescription']; ?>
			</main>
		</article>
		<aside class="column2">
			<article>
				<h1>Feedback &amp; Samples</h1>
				<?php
				// Split the string into an array
/*				echo $allProducts[PRODUCT_ID]['customerQuotes'];
				echo $allProducts[PRODUCT_ID]['workSamples'];*/
				$quotes = explode("|", $allProducts[PRODUCT_ID]['customerQuotes']);
				$samples = explode("|", $allProducts[PRODUCT_ID]['workSamples']);

				// Loop through and display the array
/*				showFormattedArray($quotes);
				showFormattedArray($samples);*/
				if (count($quotes) > 0 ) {
					foreach($quotes as $aQuote) {
						echo "<p>$aQuote</p>";
					}
				}

				if (count($samples) > 0 ) {
					foreach($samples as $aSample) {
						echo "<p>$aSample</p>";
					}
				}
				?>
			</article>
		</aside>
	</section>
	<section id="purchaseSection">
		<?php
		//echo $_GET['productID'];
		setProductPagePricing($allProducts, $_GET['productID']);
		?>
	</section>
	<?php require_once("footer_script.php"); ?>
</div>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
<?php include_once("debug.php"); ?>
</body>
</html>