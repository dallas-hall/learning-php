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
			<h2>Video Transfer</h2>
			<article id="videoTransfer">
				<main>
					<!--
					This free image was sourced at https://www.pexels.com/photo/classic-phonograph-record-retro-tech-157540/
					-->
					<img src="img/products/video/vcr.jpg" width="480" height="270">
					<p>In today’s fast moving world our lives move so fast and memories fade just as quick. We all have
						some old tapes locked in a cupboard that we are going to do something with. Well today is the
						day
						. Get them out sort through them. What is special and you want to keep for future generations.
						They make a lovely gift to give. Being able to share memories from family history, special
						occasions, weddings, christenings, or even the family just having fun. We can transfer old VHS
						and
						Super 8 to CD, DVD, SD Card, or USB memory stick.</p>
					<p>The price is $30.00 AUD per video copy.</p>
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
					><br><label>Video Storage Media I Have:
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
				<h2>Testimonials &amp; Samples</h2>
				<p><i>"Jack you are awesome. The music clips are just so awesome.– Love them all big fella."</i>
					Roger Pearson - Musician &amp; song writer.</p>
				<iframe width="320" height="240" src="https://www.youtube.com/embed/N9BhV2Pt4aI" frameborder="0"
						allowfullscreen></iframe>
				<br>
				<iframe width="320" height="240" src="https://www.youtube.com/embed/U0ifHJfq5RI" frameborder="0"
						allowfullscreen></iframe>
			</article>
		</aside>
	</section>
	<?php require("footer.php"); ?>
</div>
</body>
</html>