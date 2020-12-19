<?php 
session_start();
require APPLICATION_PATH . DS . 'model' . DS  . 'user' . DS . 'userClass.php';
require APPLICATION_PATH . DS . 'model' . DS  . 'classDatabaseManager.php';

	$user=new User();
	$message=null;
	$emailid = $_SESSION["email"];
//	$code = null;
//	$code = $_GET["code"];
	
	
	
	if(isset($_POST["securitytxt"])){
	
	$security = $_POST["securitytxt"];
//	$email = $_SESSION["email"];
    
	
	$code = $user->getSpecificUserSecurityCode($emailid);
		
		if (!empty($code)){
		$securitycode = $code[0]["security_code"];
	
			if ($security==$securitycode){
				$status = "active";
				$status = $user->updateUserStatus($status,$emailid);
				if (!empty($status)){
				$message[0] = true;
			$message[1] = "Sign Up Validation is Successful, You can log in now.";
			echo "<script> window.location.href='../View/login.php' </script> ";
				} else {
				$message[0] = false;
			$message[1] = "Sign Up Validation Failed";
				}
			} else {
				$message[0] = false;
			$message[1] = "Security code is invalid";
			}
		} else {
			$message[0] = false;
			$message[1] = "Sign Up Failed";
		}
	
	}
	$message[2] = "Verification code has been sent to your email id, kindly check your email.";
		
?>