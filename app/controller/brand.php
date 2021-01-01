<?php
session_start();
//echo $_SESSION["logIn"];
//echo $_SESSION['logInName'];

defined('APPLICATION_INNERPATH') || define('APPLICATION_INNERPATH', realpath( dirname(__FILE__) . '/../'));

//echo 0;
$PATH =  constant("APPLICATION_INNERPATH");

require $PATH . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'service_config.php'; 
require_once $config_service['DB_CLASS'];
require $config_service['BRAND_CLASS'];


	$brand=new Brand();
	$message=null;

	if(isset($_POST["name"])){
	
	$name = $_POST["name"];
    $userid = $_SESSION['logInId'];    
	
	
	
		$addedbrand = $brand->addnewbrand($name,$userid);
		if (empty($addedbrand)){
			//$message[0] = true;
			//$message[1] = "Updated Successfully";	
			//echo "Successfully Updated";
				//header("location: ../View/userprofile.php");
		echo "0";
        } else {
			echo "1";		
        }
	
	}


?>
