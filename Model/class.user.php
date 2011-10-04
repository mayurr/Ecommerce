<?php
class User{
	private $id;
	private $fName;
	private $lName;
	private $email;
	private $mobile;
	private $phoneNumber;
	private $dob;
	private $gender;
	private $addressBLine1;
	private $addressBLine2;
	private $addressBLine3;
	private $cityB;
	private $countryB;
	private $addressSLine1;
	private $addressSLine2;
	private $addressSLine3;
	private $cityS;
	private $countryS;
	
	/**
	 * User Class Constructor
	 */
	public function User() {
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
	 * @return the $phoneNumber
	 */
	public function getPhoneNumber() {
		return $this->phoneNumber;
	}

	/**
	 * @return the $dob
	 */
	public function getDob() {
		return $this->dob;
	}

	/**
	 * @return the $sex
	 */
	public function getGender() {
		return $this->gender;
	}

	/**
	 * @return the $addressBLine1
	 */
	public function getAddressBLine1() {
		return $this->addressBLine1;
	}

	/**
	 * @return the $addressBLine2
	 */
	public function getAddressBLine2() {
		return $this->addressBLine2;
	}

	/**
	 * @return the $addressBLine3
	 */
	public function getAddressBLine3() {
		return $this->addressBLine3;
	}

	/**
	 * @return the $cityB
	 */
	public function getCityB() {
		return $this->cityB;
	}

	/**
	 * @return the $countryB
	 */
	public function getCountryB() {
		return $this->countryB;
	}

	/**
	 * @return the $addressSLine1
	 */
	public function getAddressSLine1() {
		return $this->addressSLine1;
	}

	/**
	 * @return the $addressSLine2
	 */
	public function getAddressSLine2() {
		return $this->addressSLine2;
	}

	/**
	 * @return the $addressSLine3
	 */
	public function getAddressSLine3() {
		return $this->addressSLine3;
	}

	/**
	 * @return the $cityS
	 */
	public function getCityS() {
		return $this->cityS;
	}

	/**
	 * @return the $countryS
	 */
	public function getCountryS() {
		return $this->countryS;
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
	 * @param field_type $phoneNumber
	 */
	public function setPhoneNumber($phoneNumber) {
		$this->phoneNumber = $phoneNumber;
	}

	/**
	 * @param field_type $dob
	 */
	public function setDob($dob) {
		$this->dob = $dob;
	}

	/**
	 * @param field_type $sex
	 */
	public function setGender($gender) {
		$this->gender = $gender;
	}

	/**
	 * @param field_type $addressBLine1
	 */
	public function setAddressBLine1($addressBLine1) {
		$this->addressBLine1 = $addressBLine1;
	}

	/**
	 * @param field_type $addressBLine2
	 */
	public function setAddressBLine2($addressBLine2) {
		$this->addressBLine2 = $addressBLine2;
	}

	/**
	 * @param field_type $addressBLine3
	 */
	public function setAddressBLine3($addressBLine3) {
		$this->addressBLine3 = $addressBLine3;
	}

	/**
	 * @param field_type $cityB
	 */
	public function setCityB($cityB) {
		$this->cityB = $cityB;
	}

	/**
	 * @param field_type $countryB
	 */
	public function setCountryB($countryB) {
		$this->countryB = $countryB;
	}

	/**
	 * @param field_type $addressSLine1
	 */
	public function setAddressSLine1($addressSLine1) {
		$this->addressSLine1 = $addressSLine1;
	}

	/**
	 * @param field_type $addressSLine2
	 */
	public function setAddressSLine2($addressSLine2) {
		$this->addressSLine2 = $addressSLine2;
	}

	/**
	 * @param field_type $addressSLine3
	 */
	public function setAddressSLine3($addressSLine3) {
		$this->addressSLine3 = $addressSLine3;
	}

	/**
	 * @param field_type $cityS
	 */
	public function setCityS($cityS) {
		$this->cityS = $cityS;
	}

	/**
	 * @param field_type $countryS
	 */
	public function setCountryS($countryS) {
		$this->countryS = $countryS;
	}
	
	/**
	 * method to insert new user in User Table
	 * @return boolean
	 */
	public  function insertUser() {
		$numRows = $this->db->insert();
		if($numRows===1) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	
	/**
	 * method to update existing user in User Table
	 * @return boolean
	 */
	public  function updateUser() {
		$numRows = $this->db->update();
		if($numRows===1) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	
	/**
	 * method to delete existing user from User Table
	 * @return boolean
	 */
	public function deleteUser() {
		$numRows = $this->db->delete();
		if($numRows===1) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	
	public function getUser() {
		$result = $this->db->select();
		while(($row = mysql_fetch_assoc($result)) != FALSE){
			$this->fName = $row['fName'];
			$this->lName = $row['lName'];
			$this->email = $row['email'];
			$this->mobile = $row['mobile'];
			$this->phoneNumber = $row['phoneNumber'];
			$this->dob = $row['dob'];
			$this->gender = $row['gender'];
			$this->addressBLine1 = $row['addressBLine1'];
			$this->addressBLine2 = $row['addressBLine2'];
			$this->addressBLine3 = $row['addressBLine3'];
			$this->cityB = $row['cityB'];
			$this->countryB = $row['countryB'];
			$this->addressSLine1 = $row['addressSLine1'];
			$this->addressSLine2 = $row['addressSLine2'];
			$this->addressSLine3 = $row['addressSLine3'];
			$this->cityS = $row['cityS'];
			$this->countryS = $row['countryS'];
		}
	}
	
}
?>