<?php
include_once '../SqlWrapper/Class.Database.php';

class Product{
	private $productId;
	private $name;
	private $description;
	private $price;
	private $image;
	private $quantity;
	private $discount;
	private $status;
	private $tags;
	
	private $db;
	
	/**
	 * Product Class Constructor
	 */
	public function __construct() {
		$this->db = new Database();
	}
	
	/**
	 * @return the $id
	 */
	public function getProductId() {
		return $this->productId;
	}

	/**
	 * @return the $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return the $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @return the $price
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * @return the $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * @return the $quantity
	 */
	public function getQuantity() {
		return $this->quantity;
	}

	/**
	 * @return the $discount
	 */
	public function getDiscount() {
		return $this->discount;
	}

	/**
	 * @return the $status
	 */
	public function getStatus() {
		return $this->status;
	}
	
	/**
	 * @return the $tags
	 */
	public function getTags() {
		return $this->tags;
	}
	
	/**
	 * @param field_type $id
	 */
	public function setProductId($productId) {
		$this->productId = $productId;
	}

	/**
	 * @param field_type $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @param field_type $description
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * @param field_type $price
	 */
	public function setPrice($price) {
		$this->price = $price;
	}

	/**
	 * @param field_type $image
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * @param field_type $quantity
	 */
	public function setQuantity($quantity) {
		$this->quantity = $quantity;
	}

	/**
	 * @param field_type $discount
	 */
	public function setDiscount($discount) {
		$this->discount = $discount;
	}

	/**
	 * @param field_type $status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}
	
	/**
	 * @param field_type $tags
	 */
	public function setTags($tags) {
		$this->tags = $tags;
	}

	/**
	 * method to insert new product in Product Table
	 * @return boolean
	 */
	public  function insertProduct() {
		$this->db->setQuery("INSERT INTO products (product_id, name, description, price, image, quantity, discount, status, tags) VALUES ($this->productId, $this->name, $this->description, $this->price, $this->image, $this->quantity, $this->discount, $this->status, $this->tags)");
		$result = $this->db->executeQuery();
		return $result;
	}
	
	/**
	 * method to update existing product in Product Table
	 * @return boolean
	 */
	public  function updateProduct() {
		$this->db->setQuery("");
		$result = $this->db->executeQuery();
		return $result;
	}
	
	/**
	 * method to delete existing product from Product Table
	 * @return boolean
	 */
	public function deleteProduct() {
		$this->db->setQuery("DELETE FROM products WHERE product_id=$this->productId");
		$result = $this->db->executeQuery();
		return $result;
	}
	
	/**
	 * method to fetch a product from Product Table
	 * @return array
	 */
	public function getProduct() {
		$this->db->setQuery("SELECT * FROM products WHERE product_id=$this->productId");
		$result = $this->db->executeQuery();
		return $result;
	}
	
	/**
	 * method to fetch all products from Product Table
	 * @return array
	 */
	public function getProducts() {
		$this->db->setQuery("SELECT * FROM products");
		$result = $this->db->executeQuery();
		return $result;
	}	
}
?>