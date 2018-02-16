<?php
if(!isset($_SESSION)){
	session_start();
}

// Remove all of the session variables
unset($_SESSION['cart']);
unset($_SESSION['orderDetails']);
unset($_SESSION['checkoutError']);
header("Location: cart.php");
?>