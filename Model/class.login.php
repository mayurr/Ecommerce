<?php
include ("../SqlWrapper/class.database.php");

class Login{
	
	private $userId;
	private $password;
	private $db;
	private $tableName;
	private $columnArray;
	private $whereColumn;
	
	/**
	 * Login Class Constructor
	 */
	 public function __construct() {
		$this->db = new Database();
		$this->tableName = "login";
		$this->columnArray = array();
		array_push($this->columnArray,"user_id","password");
		$this->whereColumn = "user_id";
	}
	
	/**
	 * @return the $userId
	 */
	public function getUserId() {
		return $this->userId;
	}

	/**
	 * @return the $password
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * @param field_type $userId
	 */
	public function setUserId($userId) {
		$this->userId = $userId;
	}

	/**
	 * @param field_type $password
	 */
	public function setPassword($password) {
		$this->password = $password;
	}
	
	/**
	 * method to check login credentials of user/admin
	 * @return boolean
	 */
	public function checkLogin() {
		//$resultArray = array();
		$connect = $this->db->connect();
		if($connect) {
			$resultArray = $this->db->select($this->tableName,$this->columnArray,$this->whereColumn,null,$this->userId);
			}
		if(sizeof($resultArray)==0) {
			return FALSE;
		}
		else {
			if ($resultArray[0]['password'] != $this->password){
				return FALSE;
			}
			else {
				return TRUE;	
			}
		}
	}
	
	/**
	 * method to insert new user/admin in Login Table
	 * @return boolean
	 */
	public function insertLogin() {
		$numRows = $this->db->insert();
		if($numRows===1) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	
	/**
	 * method to update existing user/admin in Login Table
	 * @return boolean
	 */
	public function updateLogin() {
		$numRows = $this->db->update();
		if($numRows===1) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	
	/**
	 * method to delete existing user/admin in Login Table
	 * @return boolean
	 */
	public function deleteLogin() {
		$numRows = $this->db->delete();
		if($numRows===1) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	
}