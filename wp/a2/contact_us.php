<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Golden Tree Productions</title>
	<link href="https://fonts.googleapis.com/css?family=Cardo|Josefin+Sans"
		  rel="stylesheet">
	<link href="css/master.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="pageWrapper" id="contactUsPage">
	<header>
		<a href="index.php"><h1>Golden Tree Productions</h1><img
				src="img/logos/gtp_new_logo_tree_only.png" width="50px"
				height="50px"></a>
		<nav id="topNavigation">
			<ul>
				<li><a href="index.php" class="">Home</a></li>
				<li><a href="products.php" class="">Shop</a></li>
				<li><a href="contact_us.php" class="current">Contact</a></li>
				<li><a href="blog.php" class="">Blog</a></li>
				<li><a href="about_us.php" class="">About</a></li>
			</ul>
		</nav>
		<fieldset id="membersArea">
			<legend>Members Area</legend>
			<form action="">
				<input id="buttonSignIn" type="button" name="signIn"
					   value="Sign In">
				<input id="buttonSignUp" type="button" name="signUp"
					   value="Sign Up">
			</form>
		</fieldset>
		<span class="breadcrumbs">
			<a href="index.php">Home</a>
			<a href="contact_us.php">Contact Us</a>
		</span>
	</header>
	<main id="singlePage">
		<section class="mainContent">
			<h2>Main Content</h2>
			<article>

			</article>
		</section>
	</main>
	<footer>
		<h2>Additional Links</h2>
		<a href="index.php"><img
				src="img/logos/gtp_new_logo_tree_only.png" width="50px"
				height="50px"></a>
		<nav>
			<ul>
				<li><a href="returns_and_refunds.php" class="">Returns & Refunds</a></li>
				<li><a href="terms_and_conditions.php" class="">Terms & Conditions</a></li>
				<li><a href="privacy.php" class="">Privacy Policy</a></li>
				<li><a href="contact_us.php" class="">Contact Us</a></li>
			</ul>
		</nav>
		<div id="finalMessage">&copy; Golden Tree Productions,
			<span id="currentYear"></span>. Built by
			Dallas Hall - s3461243.
		</div>
		<!-- Using JavaScript to add the current year into the page dynamically -->
		<script type="text/javascript" src="js/getDate.js"></script>
	</footer>
</div>
</body>
</html>