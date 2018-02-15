<?php
if(!isset($_SESSION)){
	session_start();
}

unset($_SESSION['cart']);
unset($_SESSION['orderTotal']);
unset($_SESSION['checkoutError']);
unset($_SESSION['finalOrderText']);
header("Location: cart.php");
?>