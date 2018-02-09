<?php
/* Check if the session has already been started. */
if(!isset($_SESSION)){
	session_start();
}
require_once("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--Setting page information, which I learnt in the course textbook and also at https://www.w3schools.com/tags/tag_meta.asp-->
	<!-- using modules for repeated code -->
	<?php require("head.php")?>
	<meta name="description" content="This is the sign up page for Golden Tree Productions, which sells video
	production services and tarot products and services, such as Simply Tarot and Secrets of Tarot.">
	<title>GTP - Sign Up</title>
</head>
<body>
<div class="pageWrapper" id="signUpPage">
	<?php require("header.php"); ?>
	<section class="pageBody">
		<article class="singlePage">
			<main>
				<h2>Golden Tree Production Customer Sign Up</h2>
				<script type="text/javascript" src="js/checkSignUp.js"></script>
				<form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post"
					  onsubmit="return checkSignUp()">
					<fieldset>
						<legend>Login Details</legend>
						<label>Username:<input type="email" name="email" placeholder="Enter your email address."
											   required></label><br>
						<label>Password:<input id="password1" type="password" name="firstPassword" placeholder=
							"Enter your password." required></label><br>
						<label>Repeat Password:<input id="password2" type="password" name="secondPassword"
													  placeholder="Repeat your password."
													  required></label><br>
						<input id="signUpButton" type="submit" value="Sign Up">
					</fieldset>
					<p id="signUpMessage"></p>
				</form>
			</main>
		</article>
	</section>
	<?php require("footer.php"); ?>
</div>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
<?php include_once("debug.php"); ?>
</body>
</html>