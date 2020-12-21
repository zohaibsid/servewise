<?php
session_start();
//echo $_SESSION["logIn"];
//echo $_SESSION['logInName'];

defined('APPLICATION_INNERPATH') || define('APPLICATION_INNERPATH', realpath( dirname(__FILE__) . '/../'));

//echo 0;
$PATH =  constant("APPLICATION_INNERPATH");

require $PATH . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'service_config.php'; 
require $config_service['DB_CLASS'];
require $config_service['BRANCH_CLASS'];
	
	$branch=new branch();
	$message=null;

	$getvendors = $branch->getvendorsforbranch();


	if(isset($_POST["signupbtn"])){
	
	$vendorid = $_POST["vendor"];
		$name = $_POST["name"];
     $contactno = $_POST["contactno"];
	$emailid = $_POST["email"];
		$address = $_POST["address"];
        $address2 = $_POST["address2"];
      
		$userid = "6";
	
	
	
		$reqbranch = $branch->requestbranch($name,$contactno,$emailid,$address,$address2,$userid,$vendorid);
	} else if (!empty($reqbranch)){
			$getbranch=$branch->getspecificbranchbyemail($emailid);
			$branchid = $getbranch[0]["branch_id"];	
		} else if (!empty($getbranch)){
					 
				$country = $_POST["country"];
					$addcountry = $branch->addcountrytosubbranch($branchid,$country);
				
			 } else if (!empty($addcountry){
						$getsubbranchcountry = $branch->getspecificsubbranchcountry($branchid);
						$sbc = $getsubbranchcountry[0]["sbc_id"];
				} else if (!empty($getsubbranchcountry)){
						$state = $_POST["state"];	
						$addstate = $branch->addstatetosubbranch($state,$branchid,$sbc);
					} else if (!empty($addstate)){
							$getsubbranchstate = $branch->getspecificsubbranchstate($branchid);
							$sbs = $getsubbranchstate[0]["sbs_id"];
						}	else if (!empty($getsubbranchstate)){
							 $city = $_POST["city"];
							$addcity = $branch->addcitytosubbranch($city,$branchid,$sbs);
							
						}
	
						
 
        
       

?>
