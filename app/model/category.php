<?php
session_start();
//echo $_SESSION["logIn"];
//echo $_SESSION['logInName'];

 require("category/categoryClass.php");
 require($dbcalss);

	$category = new Category();
	$message=null;

	
	//print_r($olddetails);
	$vbid = $_SESSION['vbid'];
	
		$getcategory = $category->getcategorybyvbid($vbid);
	
	
	

?>
