<?php
session_start();
//echo $_SESSION["logIn"];
//echo $_SESSION['logInName'];

 require("vendor/vendorClass.php");
 require($dbcalss);

	$vendor = new Vendor();
	$message=null;

	
	//print_r($olddetails);
	//$vbid = "1";
	
		$getcountries = $vendor->getallcountries();
        
        $getcities = $vendor->getcitybystateid($stateid);

if (isset($_POST["country_id"])){
        
        $getstates = $vendor->getstatebycountryid($countryid);
}
	
	

?>