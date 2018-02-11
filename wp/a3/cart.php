<?php
/* Check if the session has already been started. */
if(!isset($_SESSION)){
	session_start();
}
require_once("functions_script.php");
$currentFilename = getFilenameWithoutExtension(__FILE__);

// Do something if the customer has cart options
if (isset($_POST['add'], $_POST['id'], $_POST['quantity'])) {
	echo "<p>HELLO IM A CART</p>";
	echo "<p>$_POST[add]</p>";
	echo "<p>$_POST[id]</p>";
	echo "<p>$_POST[quantity]</p>";
	// server side code is required here to check if
	// - qty is a positive integer (ie 1 or more)
	// - product/service id is valid
	// - product/service option is valid
	//$_SESSION['cart'][$_POST['id']]['qty'] = $_POST['qty'];
	// repeat to add the valid option
	//header("Location: cart.php");
} else if(isset($_POST['add'], $_POST['id'], $_POST['quantity'],	$_POST['sourceType'],  $_POST['targetType'])) {
	echo "<p>HELLO IM A CART</p>";
	echo "<p>$_POST[add]</p>";
	echo "<p>$_POST[id]</p>";
	echo "<p>$_POST[quantity]</p>";
	echo "<p>$_POST[sourceType]</p>";
	echo "<p>$_POST[targetType]</p>";
}
else {
	echo "<p>HELLO IM A CART</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--Setting page information, which I learnt in the course textbook and also at https://www.w3schools.com/tags/tag_meta.asp-->
	<!-- using modules for repeated code -->
	<?php require_once("head_script.php") ?>
</head>
<body>
<div class="pageWrapper" id="singleTemplate">
	<?php require_once("header_script.php"); ?>
	<section class="pageBody">
		<article class="singlePage">
			<main>
				<h1>Your Shopping Cart</h1>


			</main>
		</article>
	</section>
	<?php require_once("footer_script.php"); ?>
</div>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
<?php include_once("debug.php"); ?>
</body>
</html>