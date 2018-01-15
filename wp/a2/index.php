<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Golden Tree Productions</title>
	<link href="https://fonts.googleapis.com/css?family=Cardo|Josefin+Sans" rel="stylesheet">
	<link href="css/master.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="pageWrapper" id="indexPage">
	<header>
		<a href="index.php"><img src="img/logos/gtp_new_logo_tree_only.png" width="50px" height="50px">
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
				<input id="buttonSignIn" type="submit" name="signIn" value="Sign In">
			</form>
			<form action="signup.php" class="memberButtons">
				<input id="buttonSignUp" type="submit" name="signUp" value="Sign Up">
			</form>
		</fieldset>
		<span class="breadcrumbs">
			<a href="index.php">Home</a>
		</span>
	</header>
	<main id="singlePage">
		<section class="aboveTheFold">
			<p>Welcome to...</p>
			<img src="img/logos/gtp_new_logo_half_size.png">
			<p>This is a place to learn about yourself and the universe. And capture it too!</p>
			<div id="servicesLinks"><a href="products.php#videoServices" class="productsLink">
					<img src="img/people/jack_with_camera.jpg" width="115px" height="100px">
					<p>Video Products &amp; Services</p></a>
				<a href="products.php#psychicServices" class="productsLink">
					<img src="img/people/amanda_and_cards.jpg" width="130px" height="100px">
					<p>Psychic Products &amp; Services</p></a>
			</div>
			<hr>
		</section>
		<section class="belowTheFold">
			<div id="column1">
				<h2>Video Services</h2>
				<ul>
					<li>Video Production</li>
					<ul>
						<li>Video Filming</li>
						<li>Video Editing</li>
						<li>Pre &amp; Post Media Production</li>
						<li>Video Stills As Photos</li>
						<li>Television Documentaries</li>
						<li>Video Show Reels</li>
						<li>Video Music Clips</li>
						<li>Corporate Training Video &amp; DVD's</li>
						<li>Resume on DVD</li>
					</ul>
					<li>Video Tape (VHS &amp; Super 8) Transfer To</li>
					<ul>
						<li>CD</li>
						<li>DVD</li>
						<li>USB</li>
						<li>SD Cards</li>
					</ul>
				</ul>
			</div>
			<div id="column2">
				<h2>Psychic Services</h2>
				<ul>
					<li>Accolades</li>
					<ul>
						<li>Psychic Hall Of Fame 2013</li>
						<li>Australian Psychic of the Year 2014/15/16</li>
					</ul>
					<li>Psychic phone &amp; email readings</li>
					<li>Astrology Charts</li>
					<li>Simply Tarot Sets</li>
					<li>Secrets of Tarot set</li>
					<li>Tarot Courses</li>
					<li>Astrology courses</li>
					<li>Soy Candles</li>
					<li>The Amanda Hall Psychic Show</li>
				</ul>
			</div>
		</section>
	</main>
	<footer>
		<h2>Additional Links</h2>
		<a href="index.php"><img src="img/logos/gtp_new_logo_tree_only.png" width="50px" height="50px"></a>
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