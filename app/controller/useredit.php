<?php
session_start();
//echo $_SESSION["logIn"];
//echo $_SESSION['logInName'];

require APPLICATION_PATH . DS . 'model' . DS  . 'user' . DS . 'userClass.php';
require APPLICATION_PATH . DS . 'model' . DS  . 'classDatabaseManager.php';


	$user=new User();
	$message=null;
	$emailid = $_SESSION["logIn"];
	
	//print_r($olddetails);
	if(isset($_POST["fname"])){
	
	$fname = $_POST["fname"];
        $lname = $_POST["lname"];
	$contactno = $_POST["contactno"];
	$address = $_POST["address"];
        $address2 = $_POST["address2"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $zip = $_POST["zip"];
        $country = $_POST["country"];
	
	
	
		$updatedetails = $user->updateuserdetails($fname,$lname,$contactno,$address,$address2,$city,$state,$zip,$country,$emailid);
		if (!empty($updatedetails)){
			$message[0] = true;
			$message[1] = "Updated Successfully";	
			//echo "Successfully Updated";
				header("location: ../View/userprofile.php");
		} else {
			$message[0] = false;
			$message[1] = "User Record Not Updated";
		}
	
	}

?>
