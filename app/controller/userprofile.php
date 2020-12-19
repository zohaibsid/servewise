<?php
	//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);	
session_start();
require APPLICATION_PATH . DS . 'model' . DS  . 'user' . DS . 'userClass.php';
require APPLICATION_PATH . DS . 'model' . DS  . 'classDatabaseManager.php';

//if(!isset($_SESSION["email"])){
				//echo "<script>window.location.href='login.php';</script>";

//}
	$login=new User();

$emailid= $_SESSION["logIn"];

$olddetails = $login->getuserdetails($emailid);

?>