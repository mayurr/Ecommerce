<?php
$admin = new Admin();
switch ($_POST['action']) {
	case "Insert":
		$admin->setId($_POST['id']);
		$admin->setFName($_POST['fName']);
		$admin->setLName($_POST['lName']);
		$admin->setEmail($_POST['email']);
		$admin->setMobile($_POST['mobile']);
		$admin->setPermission($_POST['permission']);
		$success = $admin->insertAdmin();
		break;
	
	case "Update":
		$admin->setId($_POST['id']);
		$admin->setFName($_POST['fName']);
		$admin->setLName($_POST['lName']);
		$admin->setEmail($_POST['email']);
		$admin->setMobile($_POST['mobile']);
		$admin->setPermission($_POST['permission']);
		$success = $admin->updateAdmin();
		break;

	case "Delete":
		$admin->setId($_POST['id']);
		$success = $admin->deleteAdmin();
		echo $success;
		break;
		
	case "View":
		$admin->setId($_POST['id']);
		$admin->getAdmin();
		$fName = $admin->getFName();
		$lName = $admin->getLName();
		$email = $admin->getEmail();
		$mobile = $admin->getMobile();
		$permission = $admin->getPermission();
		$json = "{\"result\": [{";
		$json .= "\"fName\":\"".$fName."\",";
		$json .= "\"lName\" :\"".$lName."\",";
		$json .= "\"email\" :\"".$email."\",";
		$json .= "\"mobile\" :\"".$mobile."\",";
		$json .= "\"permission\" :\"".$permission."\",";
		$json .= "}]}";
		echo $json;
		break;
}
?>