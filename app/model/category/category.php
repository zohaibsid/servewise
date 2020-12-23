<?php
session_start();
//echo $_SESSION["logIn"];
//echo $_SESSION['logInName'];

require("categoryClass.php");
require("../classDatabaseManager.php");

	$category=new Category();
	$message=null;

	
	//print_r($olddetails);
	$vbid = "0";
	
		$getcategory = $category->getcategorybyvbid($vbid);
	
	
	

?>
