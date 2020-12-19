<?php 
// server should keep session data for AT LEAST 1 hour
//ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
//session_set_cookie_params(3600);

session_start(); // ready to go!
//require ('../model/user/userClass.php');
//require ('../model/classDatabaseManager.php');
require APPLICATION_PATH . DS . 'model' . DS  . 'user' . DS . 'userClass.php';
require APPLICATION_PATH . DS . 'model' . DS  . 'classDatabaseManager.php';


$user = new User();
	

	if(isset($_POST["email"])){

if(!empty($_POST["password"])){
			$username = $_POST["email"];
			$password = $_POST["password"];

			$signIn = $user->newSignIn($username,$password);

			if ($signIn){
echo '1';
					$_SESSION["logIn"]=$signIn[0]['username'];
					$_SESSION['email']=$signIn[0]['email_id'];
					$_SESSION['logInType']=$signIn[0]['user_type'];
					$_SESSION['user-theme']=$signIn[0]['theme'];
					$usertype = $signIn[0]['user_type'];
					echo "<script>alert('".$_SESSION['logInType']."')</script>";
					if($usertype=='User'){
					$message[0] = true;
					$message[1] = "Signed In Successfully";	
					echo "<script>window.location.href='../View/branch.php';</script>";
						header("location: ../View/userdashboard.php");

						}
						else if($usertype=='Branch'){
					$message[0] = true;
					$message[1] = "Signed In Successfully";	
					echo "<script>window.location.href='../View/details.php';</script>";	
				}
				else if($usertype=='Admin'){
					$message[0] = true;
					$message[1] = "Signed In Successfully";	
					echo "<script>window.location.href='../View/adminpage.php';</script>";	
				} else {
			echo "<script>window.location.href='../View/login.php?message=SignIn Failed';</script>";	
		}



}else {
			echo "<script>window.location.href='../View/login.php?message=SignIn Failed';</script>";	
		}

















		}






		}
		
?>
