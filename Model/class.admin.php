<?php
class Admin{
	private $id;
	private $fName;
	private $lName;
	private $email;
	private $mobile;
	private $permission;
	private $db;
	
	/**
	 * Admin Class Constructor
	 */
	public function Admin() {
		$this->db = new Database();
	}
	
	/**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return the $fName
	 */
	public function getFName() {
		return $this->fName;
	}

	/**
	 * @return the $lName
	 */
	public function getLName() {
		return $this->lName;
	}

	/**
	 * @return the $email
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * @return the $mobile
	 */
	public function getMobile() {
		return $this->mobile;
	}

	/**
	 * @return the $permission
	 */
	public function getPermission() {
		return $this->permission;
	}

	/**
	 * @param field_type $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @param field_type $fName
	 */
	public function setFName($fName) {
		$this->fName = $fName;
	}

	/**
	 * @param field_type $lName
	 */
	public function setLName($lName) {
		$this->lName = $lName;
	}

	/**
	 * @param field_type $email
	 */
	public function setEmail($email) {
		$this->email = $email;
	}
	
	/**
	 * @param field_type $mobile
	 */
	public function setMobile($mobile) {
		$this->mobile = $mobile;
	}

	/**
	 * @param field_type $permission
	 */
	public function setPermission($permission) {
		$this->permission = $permission;
	}
	
	/**
	 * method to insert new admin in Admin Table
	 * @return boolean
	 */
	public  function insertAdmin() {
	$numRows = $this->db->insert();
		if($numRows===1) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	
	/**
	 * method to update existing admin in Admin Table
	 * @return boolean
	 */
	public  function updateAdmin() {
	$numRows = $this->db->update();
		if($numRows===1) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	
	/**
	 * method to delete existing admin from Admin Table
	 * @return boolean
	 */
	public function deleteAdmin() {
		$numRows = $this->db->delete();
		if($numRows===1) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	
}
?>