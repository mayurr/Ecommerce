<?php
$user = new User();
switch ($_POST['action']) {
	case "Insert":
		$user->setId($_POST['id']);
		$user->setFName($_POST['fName']);
		$user->setLName($_POST['lName']);
		$user->setEmail($_POST['email']);
		$user->setMobile($_POST['mobile']);
		$user->setPhoneNumber($_POST['phoneNumber']);
		$user->setDob($_POST['dob']);
		$user->setGender($_POST['gender']);
		$user->setAddressBLine1($_POST['addressBLine1']);
		$user->setAddressBLine2($_POST['addressBLine2']);
		$user->setAddressBLine3($_POST['addressBLine3']);
		$user->setCityB($_POST['cityB']);
		$user->setCountryB($_POST['countryB']);
		$user->setAddressSLine1($_POST['addressSLine1']);
		$user->setAddressSLine2($_POST['addressSLine2']);
		$user->setAddressSLine3($_POST['addressSLine3']);
		$user->setCityS($_POST['cityS']);
		$user->setCountryS($_POST['countryS']);
		$success = $user->insertUser();
		echo  $success;
		break;
	
	case "Update":
		$user->setId($_POST['id']);
		$user->setFName($_POST['fName']);
		$user->setLName($_POST['lName']);
		$user->setEmail($_POST['email']);
		$user->setMobile($_POST['mobile']);
		$user->setPhoneNumber($_POST['phoneNumber']);
		$user->setDob($_POST['dob']);
		$user->setGender($_POST['gender']);
		$user->setAddressBLine1($_POST['addressBLine1']);
		$user->setAddressBLine2($_POST['addressBLine2']);
		$user->setAddressBLine3($_POST['addressBLine3']);
		$user->setCityB($_POST['cityB']);
		$user->setCountryB($_POST['countryB']);
		$user->setAddressSLine1($_POST['addressSLine1']);
		$user->setAddressSLine2($_POST['addressSLine2']);
		$user->setAddressSLine3($_POST['addressSLine3']);
		$user->setCityS($_POST['cityS']);
		$user->setCountryS($_POST['countryS']);
		$success = $user->updateUser();
		echo $success;
		break;

	case "Delete":
		$user->setId($_POST['id']);
		$success = $user->deleteUser();
		echo $success;
		break;
		
	case "View":
		$user->setId($_POST['id']);
		$user->getUser();
		$fName = $user->getFName();
		$lName = $user->getLName();
		$email = $user->getEmail();
		$mobile = $user->getMobile();
		$phoneNumber = $user->getPhoneNumber();
		$dob = $user->getDob();
		$gender = $user->getGender();
		$addressBLine1 = $user->getAddressBLine1();
		$addressBLine2 = $user->getAddressBLine2();
		$addressBLine3 = $user->getAddressBLine3();
		$cityB = $user->getCityB();
		$countryB = $user->getCountryB();
		$addressSLine1 = $user->getAddressSLine1();
		$addressSLine2 = $user->getAddressSLine2();
		$addressSLine3 = $user->getAddressSLine3();
		$cityS = $user->getCityS();
		$countryS = $user->getCountryS();
		$json = "{\"result\": [{";
		$json .= "\"fName\":\"".$fName."\",";
		$json .= "\"lName\" :\"".$lName."\",";
		$json .= "\"email\" :\"".$email."\",";
		$json .= "\"mobile\" :\"".$mobile."\",";
		$json .= "\"phoneNumber\" :\"".$phoneNumber."\",";
		$json .= "\"dob\" :\"".$dob."\",";
		$json .= "\"gender\" :\"".$gender."\",";
		$json .= "\"addressBLine1\" :\"".$addressBLine1."\",";
		$json .= "\"addressBLine2\" :\"".$addressBLine2."\",";
		$json .= "\"addressBLine3\" :\"".$addressBLine3."\",";
		$json .= "\"cityB\" :\"".$cityB."\",";
		$json .= "\"countryB\" :\"".$countryB."\",";
		$json .= "\"addressSLine1\" :\"".$addressSLine1."\",";
		$json .= "\"addressSLine2\" :\"".$addressSLine2."\",";
		$json .= "\"addressSLine3\" :\"".$addressSLine3."\",";
		$json .= "\"cityS\" :\"".$cityS."\",";
		$json .= "\"countryS\" :\"".$countryS."\",";
		$json .= "}]}";
		echo $json;
		break;
}
?>