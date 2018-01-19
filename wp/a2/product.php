<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Golden Tree Productions</title>
	<link href="https://fonts.googleapis.com/css?family=Cardo|Josefin+Sans" rel="stylesheet">
	<link href="css/master.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="pageWrapper" id="productPage">
	<header>
		<a class="navigation_image" href="index.php"><img src="img/logos/gtp_new_logo_tree_only.png" width="50px"
														  height="50px"
														  alt="The new logo of Golden Tree Productions. It has a golden tree sprouting out of what looks a book.">
			<h1>Golden Tree Productions</h1></a>
		<nav id="topNavigation">
			<ul>
				<li><a href="index.php" class="current">Home</a></li>
				<li><a href="products.php" class="">Shop</a></li>
				<li><a href="blog.php" class="">Blog</a></li>
				<li><a href="contact_us.php" class="">Contact Us</a></li>
				<li><a href="#bottomNavigation" class="">Bottom</a></li>
			</ul>
		</nav>
		<fieldset id="membersArea">
			<legend>Members Area</legend>
			<form action="login.php" class="memberButtons">
				<input id="buttonLogin" type="submit" name="login" value="Login">
			</form>
			<form action="signup.php" class="memberButtons">
				<input id="buttonSignUp" type="submit" name="signUp" value="Sign Up">
			</form>
		</fieldset>
		<span class="breadcrumbs"><a href="index.php">Home</a></span><span class="breadcrumbs"><a href=
																								  "products.php">Shop</a></span><span
				class="breadcrumbs"> Product</span>
	</header>
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
					</form><br>
					<form action="contact_us.php"><input id="productBuyButton"
								class="videoProductionButtons" type="submit" value="Buy Now"><input
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
	<footer>
		<h2>Additional Links</h2>
		<a class="navigation_image" href="index.php"><img src="img/logos/gtp_new_logo_tree_only.png" width="50px"
														  height="50px"
														  alt="The new logo of Golden Tree Productions. It has a golden tree sprouting out of what looks a book."
			></a>
		<nav id="bottomNavigation">
			<ul>
				<li><a href="about_us.php" class="">About</a></li>
				<li><a href="contact_us.php" class="">Contact Us</a></li>
				<li><a href="privacy.php" class="">Privacy Policy</a></li>
				<li><a href="returns_and_refunds.php" class="">Returns & Refunds</a></li>
				<li><a href="terms_and_conditions.php" class="">Terms & Conditions</a></li>
				<li><a href="#topNavigation" class="">Top</a></li>
			</ul>
		</nav>
		<div id="finalMessage">&copy; Golden Tree Productions,
			<span id="currentYear"></span>. Built by Dallas Hall - s3461243.
		</div>
		<!-- Using JavaScript to add the current year into the page dynamically -->
		<script type="text/javascript" src="js/getDate.js"></script>
	</footer>
</div>
</body>
</html>