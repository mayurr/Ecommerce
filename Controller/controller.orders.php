<?php
$order =  new Order();
switch ($_POST['action']) {
	case "Insert":
		$order->setId($_POST['id']);
		$order->setProductString($_POST['productString']);
		$order->setQuantityString($_POST['quantityString']);
		$order->setCartId($_POST['cartId']);
		$order->setSessionId($_POST['sessionId']);
		$order->setUserId($_POST['userId']);
		$order->setStatus($_POST['status']);
		$order->setTime($_POST['time']);
		$order->setDay($_POST['day']);
		$order->setMonth($_POST['month']);
		$order->setYear($_POST['year']);
		$success = $order->insertOrder();
		echo $success;
		break;
	
	case "Update":
		$order->setId($_POST['id']);
		$order->setProductString($_POST['productString']);
		$order->setQuantityString($_POST['quantityString']);
		$order->setCartId($_POST['cartId']);
		$order->setSessionId($_POST['sessionId']);
		$order->setUserId($_POST['userId']);
		$order->setStatus($_POST['status']);
		$order->setTime($_POST['time']);
		$order->setDay($_POST['day']);
		$order->setMonth($_POST['month']);
		$order->setYear($_POST['year']);
		$success = $order->updateOrder();
		echo $success;
		break;

	case "Delete":
		$order->setId($_POST['id']);
		$success = $order->deleteOrder();
		echo $success;
		break;
		
	case "View":
		$order->setId($_POST['id']);
		$order->getOrder();
		$productString = $order->getProductString();
		$quantityString = $order->getQuantityString();
		$cartId = $order->getCartId();
		$sessionId = $order->getSessionId();
		$userId = $order->getUserId();
		$status = $order->getStatus();
		$time = $order->getTime();
		$day = $order->getDay();
		$month = $order->getMonth();
		$year = $order->getYear();
		$json = "{\"result\": [";
		$json .= "{\"productString\":\"".$productString."\",";
		$json .= "\"quantityString\" :\"".$quantityString."\",";
		$json .= "\"cartId\" :\"".$cartId."\",";
		$json .= "\"sessionId\" :\"".$sessionId."\",";
		$json .= "\"userId\" :\"".$userId."\",";
		$json .= "\"status\" :\"".$status."\",";
		$json .= "\"time\" :\"".$time."\",";
		$json .= "\"day\" :\"".$day."\",";
		$json .= "\"month\" :\"".$month."\",";
		$json .= "\"year\" :\"".$year."\"}";
		$json .= "]}";
		echo $json;
		break;
		
	case "ViewAll":
		$order->getOrders();
		$ordersArray = $order->getOrdersArray();
		$arraySize = sizeof($ordersArray);
		$json = "{\"result\": [";
		for ($i=0 ; $i<$arraySize ; $i++) {
			if ($i === ($arraySize-1)){
				$json .= "{\"productString\":\"".$ordersArray[$i]['productString']."\",";
				$json .= "\"quantityString\" :\"".$ordersArray[$i]['quantityString']."\",";
				$json .= "\"cartId\" :\"".$ordersArray[$i]['cartId']."\",";
				$json .= "\"sessionId\" :\"".$ordersArray[$i]['sessionId']."\",";
				$json .= "\"userId\" :\"".$ordersArray[$i]['userId']."\",";
				$json .= "\"status\" :\"".$ordersArray[$i]['status']."\",";
				$json .= "\"time\" :\"".$ordersArray[$i]['time']."\",";
				$json .= "\"day\" :\"".$ordersArray[$i]['day']."\",";
				$json .= "\"month\" :\"".$ordersArray[$i]['month']."\",";
				$json .= "\"year\" :\"".$ordersArray[$i]['year']."\"}";
			}
			else {
				$json .= "{\"productString\":\"".$ordersArray[$i]['productString']."\",";
				$json .= "\"quantityString\" :\"".$ordersArray[$i]['quantityString']."\",";
				$json .= "\"cartId\" :\"".$ordersArray[$i]['cartId']."\",";
				$json .= "\"sessionId\" :\"".$ordersArray[$i]['sessionId']."\",";
				$json .= "\"userId\" :\"".$ordersArray[$i]['userId']."\",";
				$json .= "\"status\" :\"".$ordersArray[$i]['status']."\",";
				$json .= "\"time\" :\"".$ordersArray[$i]['time']."\",";
				$json .= "\"day\" :\"".$ordersArray[$i]['day']."\",";
				$json .= "\"month\" :\"".$ordersArray[$i]['month']."\",";
				$json .= "\"year\" :\"".$ordersArray[$i]['year']."\"},";
			}
		}
		$json .= "]}";
		echo $json;
		break;
}
?>