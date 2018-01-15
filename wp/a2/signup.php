<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Golden Tree Productions</title>
	<link href="https://fonts.googleapis.com/css?family=Cardo|Josefin+Sans" rel="stylesheet">
	<link href="css/master.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="pageWrapper" id="singleTemplate">
	<header>
		<a href="index.php"><img src="img/logos/gtp_new_logo_tree_only.png" width="50px" height="50px">
			<h1>Golden Tree Productions</h1></a>
		<nav id="topNavigation">
			<ul>
				<li><a href="index.php" class="current">Home</a></li>
				<li><a href="products.php" class="">Shop</a></li>
				<li><a href="contact_us.php" class="">Contact</a></li>
				<li><a href="blog.php" class="">Blog</a></li>
				<li><a href="about_us.php" class="">About</a></li>
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
		<section class="mainContent">
			<h2>Golden Tree Production Customer Sign Up</h2>
			<article>
				<fieldset>
					<legend>Login Details</legend>
					<label>Username:<input type="email" placeholder="Your email address." required></label><br>
					<label>Password:<input type="password" placeholder="Your password." required></label><br>
					<label>Repeat Password:<input type="password" placeholder="Repeat your password." required></label><br>
					<input type="submit" name="buttonSignup" value="Sign Up">
				</fieldset>
			</article>
		</section>
	</main>
	<footer>
		<h2>Additional Links</h2>
		<a href="index.php"><img src="img/logos/gtp_new_logo_tree_only.png" width="50px" height="50px"></a>
		<nav id="bottomNavigation">
			<ul>
				<li><a href="returns_and_refunds.php" class="">Returns & Refunds</a></li>
				<li><a href="terms_and_conditions.php" class="">Terms & Conditions</a></li>
				<li><a href="privacy.php" class="">Privacy Policy</a></li>
				<li><a href="contact_us.php" class="">Contact Us</a></li>
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