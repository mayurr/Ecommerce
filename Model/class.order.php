<?php
include_once '../SqlWrapper/Class.Database.php';

class Order {
	
	private $orderId;
	private $productString;
	private $quantityString;
	private $cartId;
	private $sessionId;
	private $userId;
	private $status;
	private $time;
	private $day;
	private $month;
	private $year;
	
	private $query;
	private $db;
	
	/**
	 * Class Constructor method
	 */
	function __construct(){
		$this->db = new Database();
	}
	
	/**
	 * @return the $id
	 */
	public function getOrderId() {
		return $this->orderId;
	}

	/**
	 * @return the $productString
	 */
	public function getProductString() {
		return $this->productString;
	}

	/**
	 * @return the $quantityArray
	 */
	public function getQuantityString() {
		return $this->quantityString;
	}

	/**
	 * @return the $cartId
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
	 * @return the $status
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @return the $time
	 */
	public function getTime() {
		return $this->time;
	}

	/**
	 * @return the $day
	 */
	public function getDay() {
		return $this->day;
	}

	/**
	 * @return the $month
	 */
	public function getMonth() {
		return $this->month;
	}

	/**
	 * @return the $year
	 */
	public function getYear() {
		return $this->year;
	}
	
	/**
	 * @return the $query
	 */
	public function getQuery() {
		return $this->query;
	}
	
	/**
	 * @param field_type $id
	 */
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
	}

	/**
	 * @param field_type $productArray
	 */
	public function setProductString($productString) {
		$this->productString = $productString;
	}

	/**
	 * @param field_type $quantityArray
	 */
	public function setQuantityString($quantityString) {
		$this->quantityString= $quantityString;
	}

	/**
	 * @param field_type $cartId
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
	 * @param field_type $status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

	/**
	 * @param field_type $time
	 */
	public function setTime($time) {
		$this->time = $time;
	}

	/**
	 * @param field_type $day
	 */
	public function setDay($day) {
		$this->day = $day;
	}

	/**
	 * @param field_type $month
	 */
	public function setMonth($month) {
		$this->month = $month;
	}

	/**
	 * @param field_type $year
	 */
	public function setYear($year) {
		$this->year = $year;
	}
	
	/**
	 * @param field_type $query
	 */
	public function setQuery($query) {
		$this->query = $query;
	}

	/**
	 * method to insert new order in Orders Table
	 * @return boolean
	 */
	public function insertOrder() {
		$this->db->setQuery($this->query);
		$result = $this->db->executeQuery();
		return $result;
	}
	
	/**
	 * method to update existing order in Orders Table
	 * @return boolean
	 */
	public function updateOrder() {
		$this->db->setQuery($this->query);
		$result = $this->db->executeQuery();
		return $result;
	}
	
	/**
	 * method to delete existing order in Orders Table
	 * @return boolean
	 */
	public function deleteOrder() {
		$this->db->setQuery("DELETE FROM orders WHERE order_id=$this->orderId");
		$result = $this->db->executeQuery();
		return $result;
	}
	
	/**
	 * method to fetch an order from Orders Table
	 */
	public function getOrder() {
		$this->db->setQuery("SELECT * FROM orders WHERE order_id=$this->orderId");
		$result = $this->db->executeQuery();
		return $result;
	}
	
	/**
	 * method to fetch all Orders from Orders Table
	 * @return array
	 */
	public function getOrders() {
		$this->db->setQuery("SELECT * FROM orders");
		$result = $this->db->executeQuery();
		return $result;
	}
	
}
?>