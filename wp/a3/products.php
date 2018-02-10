<?php
/* Check if the session has already been started. */
if(!isset($_SESSION)){
	session_start();
}
require_once("functions_script.php");
require_once("all_products_script.php");
$currentFilename = getFilenameWithoutExtension(__FILE__);
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
					<h3>Video Transfer</h3>
					<a href="product.php?productID=videoTransfer"><img src="img/people/jack_and_equipment.jpg"
						 width="256px" height="170px"></a>
					<p>The video transfer services we provide are:</p>
					<ul>
						<li>Transfer VHS or Super 8 to CD.</li>
						<li>Transfer VHS or Super 8 to DVD.</li>
						<li>Transfer VHS or Super 8 to USB.</li>
						<li>Transfer VHS or Super 8 to SD Card.</li>
					</ul>
					<?php
					require_once("price_script.php");
					getElement("videoTransfer", $productsTree);
					?>
					<form action="product.php" method="GET">
						<input type="submit" value="Details & Buy Now ">
						<input type="hidden" name="productID" value="videoTransfer">
					</form>
				</article>
				<article id="videoProduction" class="allProducts">
					<h3>Video Production</h3>
					<!--<a href="product.php?productID=videoProduction"><img src="img/people/jack_and_client.jpg" width="256px" height="170px"></a>-->
					<a href="product.php?productID=videoProduction"><img src="img/people/jack_and_band_no_border.jpg"
																		 width="256px" height="170px"></a>
					<p>The video productions services we provide are:</p>
					<ul>
						<li>Filming &amp; editing</li>
						<li>Pre &amp; post production</li>
						<li>Photography (using film stills)</li>
					</ul>
					<p>Please contact us with your job's details so we can arrange a free and obligation free quote.
						Sorry, but we do not do weddings due to high insurance costs.</p>
					<form class="videoProductionButtons" action="product.php">
						<input class="videoProductionButtons" type="submit" value="Details">
						<input type="hidden" name="productID" value="videoProduction">
					</form>
					<form class="videoProductionButtons" action="contact_us.php">
						<input class="videoProductionButtons" type="submit" value="Contact Us">
					</form>
				</article>
			</section>
			<section id="psychicServices">
				<h2>Psychic Products &amp; Services</h2>
				<p><b>Note:</b> All products here have free shipping within Australia and a flat fee of $45.00 AUD for
					international shipping.</p>
				<section id="simplyTarot">
					<h3>Simply Tarot</h3>
					<article id="simplyTarotSetDVD" class="allProducts">
						<h5>Simply Tarot Set With DVD</h5>
						<a href="product.php?productID=simplyTarotSetDVD"><img
									src="img/products/psychic/tarot/simply/simply_dvd_book_and_card.jpg"
												   width="256px" height="170px"></a>
						<p>This Simply Tarot Set includes:</p>
						<ul>
							<li>Simply Tarot Training DVD.</li>
							<li>Simply Tarot Training Book.</li>
							<li>Simply Tarot Card Set.</li>
						</ul>
						<?php
						require_once("price_script.php");
						getElement("simplyTarotSetDVD", $productsTree);
						?>
						<form action="product.php">
							<input type="submit" value="Details & Buy Now ">
							<input type="hidden" name="productID" value="simplyTarotSetDVD">
						</form>
					</article>
					<article id="simplyTarotSetNoDVD" class="allProducts">
						<h4>Simply Tarot Set Without DVD</h4>
						<a href="product.php?productID=simplyTarotSetNoDVD"><img src="img/products/psychic/tarot/simply/simply_book_and_card.jpg"
												   width="256px" height="170px"></a>
						<p>This Simply Tarot Set includes:</p>
						<ul>
							<li>Simply Tarot Training Book.</li>
							<li>Simply Tarot Card Set.</li>
						</ul>
						<?php
						require_once("price_script.php");
						getElement("simplyTarotSetNoDVD", $productsTree);
						?>
						<form action="product.php">
							<input type="submit" value="Details & Buy Now ">
							<input type="hidden" name="productID" value="simplyTarotSetNoDVD">
						</form>
					</article>
					<article id="simplyTarotCandleLarge" class="allProducts">
						<h4>Simply Tarot 1 Large Candle</h4>
						<a href="product.php?productID=simplyTarotCandleLarge"><img src="img/products/psychic/candles/simply/large_simply_candle.jpg"
							width="210px" height="244"></a>
						<p>There are 2 types of Simply Tarot Candles.</p>
						<ol>
							<li>One Large Simply Tarot Candle</li>
							<li>Three Small Simply Tarot Candles.</li>
						</ol>
						<?php
						require_once("price_script.php");
						getElement("simplyTarotCandleLarge", $productsTree);
						?>
						<form action="product.php">
							<input type="submit" value="Details & Buy Now ">
							<input type="hidden" name="productID" value="simplyTarotCandleLarge">
						</form>
					</article>
					<article id="simplyTarotCandlesSmall" class="allProducts">
						<h4>Simply Tarot 3 Small Candles </h4>
						<a href="product.php?productID=simplyTarotCandlesSmall"><img
									src="img/products/psychic/candles/simply/3_small_simply_candle.jpg"
																				width="256px" height="170px"></a>
						<p>There are 2 types of Simply Tarot Candles.</p>
						<ol>
							<li>One Large Simply Tarot Candle</li>
							<li>Three Small Simply Tarot Candles.</li>
						</ol>
						<?php
						require_once("price_script.php");
						getElement("simplyTarotCandlesSmall", $productsTree);
						?>
						<form action="product.php">
							<input type="submit" value="Details & Buy Now ">
							<input type="hidden" name="productID" value="simplyTarotCandlesSmall">
						</form>
					</article>
				</section>
				<section id="secretsOfTarot">
					<h3>Secrets Of Tarot</h3>
					<article id="secretsOfTarotSet" class="allProducts">
						<h4>Simply Tarot Set</h4>
						<a href="product.php?productID=secretsOfTarotSet"><img src="img/products/psychic/tarot/secrets/secrets_book_and_card.jpg"
												   width="210px" height="244"></a>
						<p>This Secrets Of Tarot Set includes:</p>
						<ul>
							<li>Simply Tarot Training Book.</li>
							<li>Simply Tarot Card Set.</li>
						</ul>
						<?php
						require_once("price_script.php");
						getElement("secretsOfTarotSet", $productsTree);
						?>
						<form action="product.php">
							<input type="submit" value="Details & Buy Now ">
							<input type="hidden" name="productID" value="secretsOfTarotSet">
						</form>
						<br>
					</article>
					<article id="secretsOfTarotCandleLarge" class="allProducts">
						<h4>Secrets Of Tarot 1 Large Candle</h4>
						<a href="product.php?productID=secretsOfTarotCandleLarge"><img src="img/products/psychic/candles/secrets/large_secrets_candle.jpg"
												   width="210px" height="244"></a>
						<p>There are 2 types of Secrets Of Tarot Candles</p>
						<ol>
							<li>One Large Secrets Of Tarot Candle</li>
							<li>Three Small Secrets Of Tarot Candles.</li>
						</ol>
						<?php
						require_once("price_script.php");
						getElement("secretsOfTarotCandleLarge", $productsTree);
						?>
						<form action="product.php">
							<input type="submit" value="Details & Buy Now ">
							<input type="hidden" name="productID" value="secretsOfTarotCandleLarge">
						</form>
					</article>
					<article id="secretsOfTarotCandlesSmall" class="allProducts">
						<h4>Secrets Of Tarot 3 Small Candles</h4>
						<a href="product.php?productID=secretsOfTarotCandlesSmall"><img src="img/products/psychic/candles/secrets/3_small_secrets_candle.jpg"
																						width="256px" height="170px"></a>
						<p>There are 2 types of Secrets Of Tarot Candles</p>
						<ol>
							<li>One Large Secrets Of Tarot Candle</li>
							<li>Three Small Secrets Of Tarot Candles.</li>
						</ol>
						<?php
						require_once("price_script.php");
						getElement("secretsOfTarotCandlesSmall", $productsTree);
						?>
						<form action="product.php">
							<input type="submit" value="Details & Buy Now ">
							<input type="hidden" name="productID" value="secretsOfTarotCandlesSmall">
						</form>
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