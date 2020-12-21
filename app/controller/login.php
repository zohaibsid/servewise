<?php 
// server should keep session data for AT LEAST 1 hour
//ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
//session_set_cookie_params(3600);

session_start(); // ready to go!
//require ('../model/user/userClass.php');
//require ('../model/classDatabaseManager.php');
defined('APPLICATION_INNERPATH') || define('APPLICATION_INNERPATH', realpath( dirname(__FILE__) . '/../'));

//echo 0;
$PATH =  constant("APPLICATION_INNERPATH");

require $PATH . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'service_config.php'; 
require $config_service['DB_CLASS'];
require $config_service['USER_CLASS'];
//require APPLICATION_INNERPATH   . DSINNER  . 'user' . DSINNER . 'userClass.php';
//require APPLICATION_INNERPATH  . DSINNER  . 'classDatabaseManager.php';

$user = new User();


	if(isset($_POST["email"])){


if(!empty($_POST["password"])){
			$username = $_POST["email"];
			$password = $_POST["password"];

			$signIn = $user->newSignIn($username,$password);

			if ($signIn){

					//$_SESSION["logIn"]=$signIn[0]['username'];
					//$_SESSION['email']=$signIn[0]['email_id'];
					//$_SESSION['logInType']=$signIn[0]['user_type'];
				//	$_SESSION['user-theme']=$signIn[0]['theme'];
				//	$usertype = $signIn[0]['user_type'];
					//echo "<script>alert('".$_SESSION['logInType']."')</script>";
					//if($usertype=='User'){
					// $message[0] = true;
					// $message[1] = "Signed In Successfully";	
					// echo "<script>window.location.href='../View/branch.php';</script>";
					// 	header("location: ../View/userdashboard.php");
						//echo '1';

					//	}
				//		else if($usertype=='Branch'){
					// $message[0] = true;
					// $message[1] = "Signed In Successfully";	
					// echo "<script>window.location.href='../View/details.php';</script>";
				//	echo '2';	
				//}
				//else if($usertype=='Admin'){
					// $message[0] = true;
					// $message[1] = "Signed In Successfully";	
					// echo "<script>window.location.href='../View/adminpage.php';</script>";
				//	echo '3';	
			//	} else {
			// echo "<script>window.location.href='../View/login.php?message=SignIn Failed';</script>";	
					echo '1';
		}



}else {
			// echo "<script>window.location.href='../View/login.php?message=SignIn Failed';</script>";
			echo '2';	
		}
	}

		
?>
