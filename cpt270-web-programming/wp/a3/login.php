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
	<meta name="description" content="This is the login page for Golden Tree Productions, which sells video
	production services and tarot products and services, such as Simply Tarot and Secrets of Tarot.">
	<title>GTP - Login</title>
</head>
<body>
<div class="pageWrapper" id="loginPage">
	<?php require_once("header_script.php"); ?>
	<section class="pageBody">
		<article class="singlePage">
			<h2>Golden Tree Production Login</h2>
			<script type="text/javascript" src="js/checkLogin.js"></script>
			<form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post"
				  onsubmit="return checkLogin()">
				<fieldset>
					<legend>Login Details</legend>
					<label>Username:<input id="loginEmail" type="email" name="email" placeholder="Your email address."
										   required></label><br>
					<label>Password:<input id="loginPassword" type="password" name="password" placeholder=
						"Your password." required></label><br>
					<input id="loginButton" type="submit" value="Login">
				</fieldset>
				<p id="loginMessage"></p>
			</form>
		</article>
	</section>
	<?php require_once("footer_script.php"); ?>
</div>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
<?php include_once("debug.php"); ?>
</body>
</html>