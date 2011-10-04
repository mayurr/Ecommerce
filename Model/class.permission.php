<?php
class Permission{
	
	private $id;
	private $name;
	private $description;
	
	/**
	 * Permission Class Constructor
	 */
	public function Permission() {
		$this->db = new Database();
	}
	
	/**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
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
	 * @param field_type $id
	 */
	public function setId($id) {
		$this->id = $id;
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
	 * method to insert new permission into Permission Table
	 * @return boolean
	 */
	public function insertPermission() {
		$numRows = $this->db->insert();
		if($numRows===1) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	
	/**
	 * method to update existing permission into Permission Table
	 * @return boolean
	 */
	public function updatePermission() {
		$numRows = $this->db->update();
		if($numRows===1) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

}
?>