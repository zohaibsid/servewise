<?php
session_start();
defined('APPLICATION_INNERPATH') || define('APPLICATION_INNERPATH', realpath( dirname(__FILE__) . '/../'));

//echo 0;
$PATH =  constant("APPLICATION_INNERPATH");

require $PATH . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'service_config.php'; 
require $config_service['DB_CLASS'];
require $config_service['USER_CLASS'];

	$user=new User();
	$message=null;
	
	if(isset($_POST["sendbtn"])){
	$emailid = $_POST["email"];
	$password = $user->getSpecificUserPassword($emailid);
	if (!empty($password)){
		$actualpassword = $password[0]["password"];
		//mail password
		$to = $emailid;
		$subject = "ServeWise Password";
		$txt = "Your Password for ServeWise is ". $actualpassword. "\n This is your password to enjoy our services.";
		$headers .= 'From: <noreply@servewise.com>' . "\r\n";
		mail($to,$subject,$txt,$headers);
		// end
		$message[0] = True;
		$message[1] = "Password is sent to your Email ID.";  
	} else {
		$message[0] = False;
		$message[1] = "No user found against this Email ID.";
	}
	}
?>