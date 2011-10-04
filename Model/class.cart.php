<?php
class Cart{
	
	private $cartId;
	private $sessionId;
	private $userId;
	private $productArray;
	private $quantityArray;
	private $timeStamp;
	private $productId;
	private $quantity;
	private $db;
	
	/**
	 * Cart Class Constructor
	 */
	public function __construct() {
		$this->db = new Database();
	}
	
	/**
	 * @return the $id
	 */
	public function getCartId() {
		return $this->cartId;
	}

	/**
	 * @return the $sessionId
	 */
	public function getSessionId() {
		return $this->sessionId;
	}
	
	/**
	 * @return the $userId
	 */
	public function getUserId() {
		return $this->userId;
	}

	/**
	 * @return the $productArray
	 */
	public function getProductArray() {
		return $this->productArray;
	}

	/**
	 * @return the $quantityArray
	 */
	public function getQuantityArray() {
		return $this->quantityArray;
	}

	/**
	 * @return the $timeStamp
	 */
	public function getTimeStamp() {
		return $this->timeStamp;
	}

	/**
	 * @param field_type $id
	 */
	public function setCartId($cartId) {
		$this->cartId = $cartId;
	}

	/**
	 * @param field_type $sessionId
	 */
	public function setSessionId($sessionId) {
		$this->sessionId = $sessionId;
	}
	
	/**
	 * @param field_type $userId
	 */
	public function setUserId($userId) {
		$this->userId = $userId;
	}

	/**
	 * @param field_type $productArray
	 */
	public function setProductArray($productArray) {
		$this->productArray = $productArray;
	}

	/**
	 * @param field_type $quantityArray
	 */
	public function setQuantityArray($quantityArray) {
		$this->quantityArray = $quantityArray;
	}

	/**
	 * @param field_type $timeStamp
	 */
	public function setTimeStamp($timeStamp) {
		$this->timeStamp = $timeStamp;
	}
	
	/**
	 * @param field_type $productId
	 */
	public function setProductId($productId) {
		$this->productId = $productId;
	}
	
	/**
	 * @param field_type $quantity
	 */
	public function setQuantity($quantity) {
		$this->quantity = $quantity;
	}
	
	
	/**
	 * method to insert new cart details in Cart Table
	 * @return boolean
	 */
	public  function insertCart() {
		$numRows = $this->db->insert();
		if($numRows===1) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	
	/**
	 * method to add a product to Cart (Session Array)
	 */
	public function addToCart() {
		$baseQuantity = 1;
		$result = $this->db->select();
		while(($row = mysql_fetch_assoc($result)) != FALSE){
			$_SESSION['cart'][] = array($row['id'], $row['name'], $row['description'], $row['cost'], $baseQuantity);
		}
	}
	
	/**
	 * method to update quantity of a product in Cart (Session Array)
	 */
	public function updateQuantity() {
		$count = 0;
		foreach ($_SESSION['cart'] as $cartRow) {
			if ($cartRow['id'] == $this->productId) {
				$_SESSION['cart'][$count]['quantity'] = $this->quantity;
				break;
			}
			$count += 1;
		}
	}
	
	/**
	 * method to remove a product from Cart (Session Array)
	 */
	public function removeFromCart() {
		$count = 0;
		foreach ($_SESSION['cart'] as $cartRow) {
			if ($cartRow['id'] == $this->productId) {
				$_SESSION['cart'] = array_splice($_SESSION['cart'], $count, 1);
				break;
			}
			$count += 1;
		}
	}
	
}
?>