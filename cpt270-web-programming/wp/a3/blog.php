<?php
/* Check if the session has already been started. */
if(!isset($_SESSION)){
	session_start();
}
require_once("functions_script.php");
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
<div class="pageWrapper" id="blogPage">
	<?php require_once("header_script.php"); ?>
	<section class="pageBodyDualPage">
		<article class="column1">
			<main>
				<h1>Soy Candles</h1>
				<h2>Intent – Purpose – Direction</h2>
				<figure>
					<img src="img/blog/2018-01-candles/blog01.jpg">
					<figcaption>Fortunes Told Naturaul Eco Candle Range, 100% Natural Eco soy candles Eco friendly.
					</figcaption>
				</figure>
				<p>You may very well like the smell of scented candles in your home. Most of us don’t know the
					difference between Chemical based candles and Natural Eco Soy with lead free wicks. Moat
					consumers
					shop by price point and value for our hard earned money.</p>
				<h2>So what is the difference I hear you ask!</h2>
				<p>In our modern times and so much research is being done into our health it is no surprise that
					scientists are trying to find the one of the many causes of cancer so now they are chemical
					based candles which have scent in them to make our homes and work spaces smell nice.</p>
				<figure>
					<img src="img/blog/2018-01-candles/blog02.jpg">
					<figcaption>Soy candle production.</figcaption>
				</figure>
				<p>You may very well like the smell of scented candles in your home. Most of us don’t know the
					difference between Chemical based candles and Natural Eco Soy with lead free wicks. Moat
					consumers shop by price point and value for our hard earned money.</p>
				<h2>What Chemicals?</h2>
				<p>Yes they are a chemical cocktail of many ingredients such as
					petroleum, benzene and alpha-pinene can be present the most common chemical released is
					limonene.</p>
				<h2>Why Choose 100% Eco Natural Soy Candles?</h2>
				<p>Eco Soy candles are made from natural ingredients, which are bio degradable and
					renewable. Eco Soy candles are nontoxic, burn clean leaving behind a sparking glass
					container. So the choice becomes very clear for your health and well being Natural Eco
					Soy Candles with lead free wicks.</p>
				<h2>Burn Times?</h2>
				<p>You can expect a longer burn time up to 50% longer than normal candles. The fragrance of
					the candle lasts throughout the whole burning of the candle. Eco Soy candles do not get
					hot, even when burning. But beware the container glass the candle is burning it will get
					hot during the burning process.</p>
				<h2>Clean Up If I spill the candle?</h2>
				<p>Soy candles are easy to clean up with water if you spill the candle accidentally.</p>
				<h2>Getting ready to use your candle?</h2>
				<p>Before you burn your Soy Candle, always keep the wick trimmed to about 4-5 cm and this
					will increase burn time. Always place your soy candle on a glass plate of coaster never
					direct on table. Make sure you always extinguish your candle with snuffer or glass
					snuffer lid. Always burn your candle in a safe location. Never place in a direct draft
					or under fan. Always keep away from children.</p>
				<figure><img src="img/blog/2018-01-candles/blog03.jpg">
					<figcaption>3 Candles your, choose your very own Soy Candles from the range.
					</figcaption>
				</figure>
				<p>To purchase these amazing candle visit <a href="products.php#psychicServices">our web
						shop</a>.</p>
				<p>This blog was written by Amanda Hall.</p>
			</main>
		</article>
		<aside class="column2">
			<h1>Testimonials</h1>
			<article>
				<h2>Cheryl Rathborne</h2>
				<p>Pleasure meeting at Festival of Dreams…wishcraft in my oil burner today was divine..much gratitude
					Amanda…love those sunflowers.</p>
				<h2>Maz Rukz</h2>
				<p>It was so lovely to see you Amanda and your beautiful new candle range they’re amazing</p>
				<h2>Kat Simicevic</h2>
				<p>I’m loving them. Best purchase I tell you and they smell so good you could eat them.</p>
				<h2>Terry Virgina</h2>
				<p>Beautiful Smelling Candles for Every situation..</p>
				<h2>Gerry Crow</h2>
				<p>You should be proud Amanda! These candles are impressive, with unique spiritual, magical and healing
					properties. I have had very strong spiritual experiences while meditating with the beautiful Healing
					candle that you gave me. As soon as I lit it I had the vision of an ancient medicine woman. I heard
					her chanting and felt the blue healing light around her. She wasn’t one of my mob However she did
					take her place in the circle of light that I work within and gave healing that was extended to all,
					thru the circle. It was Amazing, to be purchasing for my personal use and in my healing and readings
					with others! Thank you, thank you, thank you to you and all involved in creating the candles They
					are very special indeed!!!! Looking forward to seeing you XXXOOO</p>
			</article>
		</aside>
	</section>
	<?php require_once("footer_script.php"); ?>
</div>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
<?php include_once("debug.php"); ?>
</body>
</html>