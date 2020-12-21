<?php
session_start();
//echo $_SESSION["logIn"];
//echo $_SESSION['logInName'];

defined('APPLICATION_INNERPATH') || define('APPLICATION_INNERPATH', realpath( dirname(__FILE__) . '/../'));

//echo 0;
$PATH =  constant("APPLICATION_INNERPATH");

require $PATH . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'service_config.php'; 
require $config_service['DB_CLASS'];
require $config_service['VENDOR_CLASS'];
	$vendor=new Vendor();
	$message=null;

	if(isset($_POST["name"])){
	
	$name = $_POST["name"];
     $contactno = $_POST["contactno"];
	$emailid = $_POST["email"];
		$address = $_POST["address"];
        $address2 = $_POST["address2"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $zip = $_POST["zip"];
        $country = $_POST["country"];
		$userid = "6";
	
	
	
		$becomevendor = $vendor->SignUpasVendor($name,$contactno,$emailid,$address,$address2,$city,$state,$zip,$country,userid);
		if (!empty($becomevendor)){
			$message[0] = true;
			$message[1] = "Updated Successfully";	
		} else {
			$message[0] = false;
			$message[1] = "User Record Not Updated";
		}
	
	}

?>
