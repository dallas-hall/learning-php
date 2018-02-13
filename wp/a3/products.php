<?php
/* Check if the session has already been started. */
if(!isset($_SESSION)){
	session_start();
}
require_once("functions_script.php");
require_once("load_product_data.php");
require_once("purchase_script.php");
$currentFilename = getFilenameWithoutExtension(__FILE__);

function getImageTag($productID, $image, $isLandscape) {
	if ($isLandscape) {
		return "\t\t\t\t\t<a href='product.php?productID=$productID'><img src='$image' width='210px' height='244px'></a>\n";
	} else {
		return "\t\t\t\t\t<a href='product.php?productID=$productID'><img src='$image' width='256px' height='170px'></a>\n";
	}
}

function getBuyButtonTag($productID){
	$buyButton = "\t\t\t\t\t\t<form action=\"product.php\">\n";
	$buyButton .= "\t\t\t\t\t\t\t<input type=\"submit\" value=\"Details\">\n";
	$buyButton .= "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"productID\" value=\"$productID\">\n";
	$buyButton .= "\t\t\t\t\t\t</form>\n";
	return $buyButton;
}

function getContactButtonTag($productID) {
	$contactButton = "\t\t\t\t\t\t<form action=\"contact_us.php\" method='post'>\n";
	$contactButton .= "\t\t\t\t\t\t\t<input type=\"submit\" value=\"Contact Us\">\n";
	$contactButton .= "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"productID\" value=\"$productID\">\n";
	$contactButton .= "\t\t\t\t\t\t</form>\n";
	return $contactButton;
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--Setting page information, which I learnt in the course textbook and also at https://www.w3schools.com/tags/tag_meta.asp-->
	<!-- using modules for repeated code -->
	<?php require_once("head_script.php") ?>
</head>
<body>
<div class="pageWrapper" id="allProductsPage">
	<?php require_once("header_script.php"); ?>
	<section class="pageBodyDualPage">
		<main>
			<h1>Golden Tree Production Products &amp; Services</h1>
			<h2>Video Products &amp; Services</h2>
			<section id="videoServices">
				<article id="videoTransfer" class="allProducts">
					<h3><?php echo $allProducts['videoTransfer']["productTitle"]?></h3>
					<?php echo getImageTag('videoTransfer', 'img/people/jack_and_equipment.jpg', false); ?>
					<p>The video transfer services we provide are:</p>
					<ul>
						<li>Transfer VHS or Super 8 to CD.</li>
						<li>Transfer VHS or Super 8 to DVD.</li>
						<li>Transfer VHS or Super 8 to USB.</li>
						<li>Transfer VHS or Super 8 to SD Card.</li>
					</ul>
					<?php
					echo "<p>" . setProductPagePricing($allProducts, "videoTransfer") . "</p>";
					echo getBuyButtonTag('videoTransfer');
					?>
				</article>
				<article id="videoProduction" class="allProducts">
					<h3><?php echo $allProducts['videoProduction']["productTitle"]?></h3>
					<?php echo getImageTag('videoProduction', 'img/people/jack_and_band_no_border.jpg', false); ?>
					<p>The video productions services we provide are:</p>
					<ul>
						<li>Filming &amp; editing</li>
						<li>Pre &amp; post production</li>
						<li>Photography (using film stills)</li>
					</ul>
					<p>Please contact us with your job's details so we can arrange a free and obligation free quote.
						Sorry, but we do not do weddings due to high insurance costs.</p>
					<?php echo getBuyButtonTag('videoProduction');?>
					<?php echo getContactButtonTag('videoProduction');?>
				</article>
			</section>
			<section id="psychicServices">
				<h2>Psychic Products &amp; Services</h2>
				<p><b>Note:</b> All products here have free shipping within Australia and a flat fee of $45.00 AUD for
					international shipping.</p>
				<section id="simplyTarot">
					<h3>Simply Tarot</h3>
					<article id="simplyTarotSetDVD" class="allProducts">
						<h4><?php echo $allProducts['simplyTarotSetDVD']["productTitle"]?></h4>
						<?php echo getImageTag( 'simplyTarotSetDVD', 'img/products/psychic/tarot/simply/simply_dvd_book_and_card.jpg', false); ?>
						<p>This Simply Tarot Set includes:</p>
						<ul>
							<li>Simply Tarot Training DVD.</li>
							<li>Simply Tarot Training Book.</li>
							<li>Simply Tarot Card Set.</li>
						</ul>
						<?php
						echo "<p>" . setProductPagePricing($allProducts, "simplyTarotSetDVD") . "</p>";
						echo getBuyButtonTag('simplyTarotSetDVD');
						?>
					</article>
					<article id="simplyTarotSetNoDVD" class="allProducts">
						<h4><?php echo $allProducts['simplyTarotSetNoDVD']["productTitle"]?></h4>
						<?php echo getImageTag( 'simplyTarotSetNoDVD', 'img/products/psychic/tarot/simply/simply_book_and_card.jpg', false); ?>
						<p>This Simply Tarot Set includes:</p>
						<ul>
							<li>Simply Tarot Training Book.</li>
							<li>Simply Tarot Card Set.</li>
						</ul>
						<?php
						echo "<p>" . setProductPagePricing($allProducts, "simplyTarotSetNoDVD") . "</p>";
						echo getBuyButtonTag('simplyTarotSetNoDVD');
						?>
					</article>
					<article id="simplyTarotCandleLarge" class="allProducts">
						<h4><?php echo $allProducts['simplyTarotCandleLarge']["productTitle"]?></h4>
						<?php echo getImageTag( 'simplyTarotCandleLarge', 'img/products/psychic/candles/simply/large_simply_candle.jpg', true); ?>
						<p>There are 2 types of Simply Tarot Candles.</p>
						<ol>
							<li>One Large Simply Tarot Candle</li>
							<li>Three Small Simply Tarot Candles.</li>
						</ol>
						<?php
						echo "<p>" . setProductPagePricing($allProducts, "simplyTarotCandleLarge") . "</p>";
						getBuyButtonTag('simplyTarotCandleLarge');
						?>
					</article>
					<article id="simplyTarotCandlesSmall" class="allProducts">
						<h4><?php echo $allProducts['simplyTarotCandlesSmall']["productTitle"]?></h4>
						<?php echo getImageTag( 'simplyTarotCandlesSmall', 'img/products/psychic/candles/simply/3_small_simply_candle.jpg', false); ?>
						<p>There are 2 types of Simply Tarot Candles.</p>
						<ol>
							<li>One Large Simply Tarot Candle</li>
							<li>Three Small Simply Tarot Candles.</li>
						</ol>
						<?php
						echo "<p>" . setProductPagePricing($allProducts, "simplyTarotCandlesSmall") . "</p>";
						getBuyButtonTag('simplyTarotCandlesSmall');
						?>
					</article>
				</section>
				<section id="secretsOfTarot">
					<h3>Secrets Of Tarot</h3>
					<article id="secretsOfTarotSet" class="allProducts">
						<h4><?php echo $allProducts['secretsOfTarotSet']["productTitle"]?></h4>
						<?php echo getImageTag( 'secretsOfTarotSet', 'img/products/psychic/tarot/secrets/secrets_book_and_card.jpg', true); ?>
						<p>This Secrets Of Tarot Set includes:</p>
						<ul>
							<li>Simply Tarot Training Book.</li>
							<li>Simply Tarot Card Set.</li>
						</ul>
						<?php
						echo "<p>" . setProductPagePricing($allProducts, "secretsOfTarotSet") . "</p>";
						getBuyButtonTag('secretsOfTarotSet');
						?>
						<br>
					</article>
					<article id="secretsOfTarotCandleLarge" class="allProducts">
						<h4><?php echo $allProducts['secretsOfTarotCandleLarge']["productTitle"]?></h4>
						<?php echo getImageTag( 'secretsOfTarotCandleLarge', 'img/products/psychic/candles/secrets/large_secrets_candle.jpg', true); ?>
						<p>There are 2 types of Secrets Of Tarot Candles</p>
						<ol>
							<li>One Large Secrets Of Tarot Candle</li>
							<li>Three Small Secrets Of Tarot Candles.</li>
						</ol>
						<?php
						echo "<p>" . setProductPagePricing($allProducts, "secretsOfTarotCandleLarge") . "</p>";
						getBuyButtonTag('secretsOfTarotCandleLarge');
						?>
					</article>
					<article id="secretsOfTarotCandlesSmall" class="allProducts">
						<h4><?php echo $allProducts['secretsOfTarotCandlesSmall']["productTitle"]?></h4>
						<?php echo getImageTag( 'secretsOfTarotCandlesSmall', 'img/products/psychic/candles/secrets/3_small_secrets_candle.jpg', false); ?>
						<p>There are 2 types of Secrets Of Tarot Candles</p>
						<ol>
							<li>One Large Secrets Of Tarot Candle</li>
							<li>Three Small Secrets Of Tarot Candles.</li>
						</ol>
						<?php
						echo "<p>" . setProductPagePricing($allProducts, "secretsOfTarotCandlesSmall") . "</p>";
						getBuyButtonTag('secretsOfTarotCandlesSmall');
						?>
					</article>
				</section>
			</section>
		</main>
	</section>
	<?php require_once("footer_script.php"); ?>
</div>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
<?php include_once("debug.php"); ?>
</body>
</html>