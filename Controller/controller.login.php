<?php
include ("../Model/class.login.php");
$login = new Login();
switch ($_POST['action']) {
	case "Insert":
		$login->setUserId($_POST['id']);
		$login->setPassword($_POST['password']);
		$success = $login->insertLogin();
		echo $success;
		break;
	
	case "Update":
		$login->setUserId($_POST['id']);
		$login->setPassword($_POST['password']);
		$success = $login->updateLogin();
		echo $success;
		break;

	case "Delete":
		$login->setUserId($_POST['id']);
		$success = $login->deleteLogin();
		echo $success;
		break;
		
	case "Check":
		$login->setUserId($_POST['id']);
		$login->setPassword($_POST['password']);
		$success = $login->checkLogin();
		echo $success;
		break;
}

?>