<?php
session_start();
if(!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}

$cart = new Cart();
switch ($_POST['action']) {
	case "Insert":
		$cart->setId($_POST['id']);
		$cart->setSessionId($_POST['sessionId']);
		$cart->setUserId($_POST['userId']);
		$cart->setProductArray(explode(",", $_POST['productArray']));
		$cart->setQuantityArray(explode(",", $_POST['quantityArray']));
		$cart->setTimeStamp($_POST['timeStamp']);
		$cart->insertCart();
		break;
		
	case "Add":
		$cart->setProductId($_POST['productId']);
		$cart->addToCart();
		break;
		
	case "Update":
		$cart->setProductId($_POST['productId']);
		$cart->setQuantity($_POST['quantity']);
		$cart->updateQuantity();
		break;
		
	case "Remove":
		$cart->setProductId($_POST['productId']);
		$cart->removeFromCart();
		break;
}
?>