<?php
if(!isset($_SESSION)){
	session_start();
}

unset($_SESSION['cart']);
unset($_SESSION['orderTotal']);
unset($_SESSION['internationalOrder']);
header("Location: cart.php");
?>