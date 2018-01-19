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
			<form action="/~e54061/wp/processing.php" class="memberButtons">
				<input id="buttonLogin" type="submit" name="login" value="Login">
			</form>
			<form action="signup.php" class="memberButtons">
				<input id="buttonSignUp" type="submit" name="signUp" value="Sign Up">
			</form>
		</fieldset>
		<span class="breadcrumbs"><a href="index.php">Home</a></span><span class="breadcrumbs"> Login</span>
	</header>
	<section class="pageBody">
		<article class="singlePage">
			<h2>Golden Tree Production Login</h2>
			<script type="text/javascript" src="js/checkLogin.js"></script>
			<form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post" onsubmit="return checkLogin()">
				<fieldset>
					<legend>Login Details</legend>
					<label>Username:<input id="loginEmail" type="email" name="email" placeholder="Your email address."
										   required></label><br>
					<label>Password:<input id="loginPassword" type="password" name="password" placeholder="Your
						password."
										   required></label><br>
					<input type="submit" value="Log In">
				</fieldset>
			</form>
		</article>
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