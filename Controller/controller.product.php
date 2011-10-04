<?php
$product =  new Product();
switch ($_POST['action']) {
	case "Insert":
		$product->setId($_POST['productId']);
		$product->setName($_POST['name']);
		$product->setDescription($_POST['description']);
		$product->setPrice($_POST['price']);
		$product->setImage($_POST['image']);
		$product->setDiscount($_POST['discount']);
		$product->setStatus($_POST['status']);
		$product->setTags($_POST['tags']);
		$result = $product->insertProduct();
		echo $result;
		break;
	
	case "Update":
		$product->setId($_POST['productId']);
		$product->setName($_POST['name']);
		$product->setDescription($_POST['description']);
		$product->setPrice($_POST['price']);
		$product->setImage($_POST['image']);
		$product->setDiscount($_POST['discount']);
		$product->setStatus($_POST['status']);
		$product->setTags($_POST['tags']);
		$result = $product->updateProduct();
		echo $result;
		break;

	case "Delete":
		$product->setId($_POST['productId']);
		$result = $product->deleteProduct();
		echo $result;
		break;
		
	case "View":
		$product->setId($_POST['productId']);
		$result = $product->getProduct();
		$json = json_encode($result);
		echo $json;
		break;
		
	case "ViewAll":
		$result = $product->getProducts();
		$json = json_encode($result);		
		echo $json;
		break;
}
?>