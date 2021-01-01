<?php
session_start();
//echo $_SESSION["logIn"];
//echo $_SESSION['logInName'];

 require("brand/brandClass.php");
 require_once($dbcalss);

	$brand = new Brand();
	$message=null;

		$getbrand = $brand->getallbrands();
	
	
	

?>
