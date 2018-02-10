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
	<meta name="description" content="This is the privacy page for Golden Tree Productions, which sells video
	production services and tarot products and services, such as Simply Tarot and Secrets of Tarot.">
	<title>GTP - Privacy</title>
</head>
<body>
<div class="pageWrapper" id="privacyPage">
	<?php require_once("header_script.php"); ?>
	<section class="pageBody">
		<article class="singlePage">
			<main>
				<h1>Privacy Policy</h1>
				<article>
					<h2>Privacy Statement</h2>
					<p>Amanda Hall @ Golden Tree Productions has created our privacy policy to demonstrate our firm
						commitment to your privacy and the protection of any information that you send or share with us.
						All clients’ personal details and information is considered extremely sensitive and very
						private. Under no circumstance will your information be shared or sold without your written
						permission.</p>
					<h2>Protecting Your Privacy</h2>
					<p>Amanda Hall @ Golden Tree Productions is operated by myself and a small professional trusted team
						for website administration and technical support. We only store minimal information necessary
						for administration purposes. We use security measures to protect against the loss, misuse and
						alteration of any data stored by us. We never share, sell, rent, lease or trade any details what
						so ever with anyone. Information submitted to on our site or by e-mail is only ever used for
						administration purposes.</p>
					<p>If you would like further information about our policies, please <a href="contact_us.php">contact
							us</a>.</p>
				</article>
			</main>
	</section>
	<?php require_once("footer_script.php"); ?>
</div>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
<?php include_once("debug.php"); ?>
</body>
</html>