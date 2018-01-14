<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Golden Tree Productions</title>
	<link href="https://fonts.googleapis.com/css?family=Cardo|Josefin+Sans"
		  rel="stylesheet">
	<link href="css/master.css" type="text/css" rel="stylesheet">
</head>
<body id="all-products-page">
<div class="wrapper">
	<header>
		<a id='home-link'href="index.php"><h1>Golden Tree Productions</h1><img
					src="img/logos/gtp_new_logo_tree_only.png" width="50px"
					height="50px"></a>
		<nav id="top-nav">
			<ul>
				<li><a href="index.php" class="">Home</a></li>
				<li><a href="products.php" class="">Shop</a></li>
				<li><a href="contact_us.php" class="">Contact</a></li>
				<li><a href="blog.php" class="">Blog</a></li>
				<li><a href="about_us.php" class="">About</a></li>
			</ul>
		</nav>
		<fieldset id="members-area">
			<legend>Members Area</legend>
			<form action="">
				<input id="buttonSignIn" type="button" name="sign-in"
					   value="Sign In">
				<input id="buttonSignUp" type="button" name="sign-up"
					   value="Sign Up">
			</form>
		</fieldset>
		<span class="breadcrumb">
			<a href="index.php">Home</a>
			<a href="products.php">Products</a>
		</span>
	</header>
	<main>
		<section>
			<h2 class="main-content">Main Content</h2>
			<article>

			</article>
		</section>
		<aside id="side-content">
			<h2>Side Content</h2>
			<article>

			</article>
		</aside>
	</main>
	<footer>
		<h2>Additional Links</h2>
		<a href="index.html"><img
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
		<div id="final-message">&copy; Golden Tree Productions,
			<span id="current-year"></span>. Built by
			Dallas Hall - s3461243.
		</div>
		<!-- Using JavaScript to add the current year into the page dynamically -->
		<script type="text/javascript" src="js/getDate.js"></script>
</div>
</body>
</html>