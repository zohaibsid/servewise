<?php
session_start();
//echo $_SESSION["logIn"];
//echo $_SESSION['logInName'];

defined('APPLICATION_INNERPATH') || define('APPLICATION_INNERPATH', realpath( dirname(__FILE__) . '/../'));

//echo 0;
$PATH =  constant("APPLICATION_INNERPATH");

require $PATH . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'service_config.php'; 
require $config_service['DB_CLASS'];
require $config_service['PRODUCT_CLASS'];

extract($_POST);
$error=array();
$extension=array("jpeg","jpg","png","gif");
$randomstring = generateRandomString();

	$product=new Product();
	$message=null;

	if(isset($_POST["add"])){
	
	$name = $_POST["name"];
        $description = $_POST["description"];
        $quantity = $_POST["quantity"];
        $price = $_POST["price"];
        $code = $name.
    $userid = "6";    
	
	
	
		$addedbrand = $brand->addnewbrand($name,$userid);
		if (empty($addedbrand)){
			//$message[0] = true;
			//$message[1] = "Updated Successfully";	
			//echo "Successfully Updated";
				//header("location: ../View/userprofile.php");
		echo "0";
        } else {
			echo "1";		
        }
	
	}


foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
    $file_name=$_FILES["files"]["name"][$key];
    $file_tmp=$_FILES["files"]["tmp_name"][$key];
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);
    

    if(in_array($ext,$extension)) {
        
            $filename=basename($file_name,$ext);
            $newFileName=$randomstring.$filename.time().".".$ext;
            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"../photo_gallery/".$newFileName);
            echo $newFileName;
        
    }
    else {
        array_push($error,"$file_name, ");
    }
}
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}



?>
