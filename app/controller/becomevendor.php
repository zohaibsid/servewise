<?php 
session_start();
require APPLICATION_PATH . DS . 'model' . DS  . 'user' . DS . 'userClass.php';
require APPLICATION_PATH . DS . 'model' . DS  . 'classDatabaseManager.php';
	$user=new User();
	$message=null;
	
	if(isset($_POST["email"])){
	

	$email = $_POST["email"];
	$password = $_POST["password"];
	$cpassword = $_POST["confirm_Password"];
	$security_code = mt_rand(1000,9999);
	$_SESSION["email"]=$email;
        	$status = "block";
   
	
    
	//mail securtiy code
/*	$to = $email;
$subject = "ServeWise Verification of Email";
$txt = "Your Verification code for ServeWise is ". $security_code. "\n Add this verification code to enjoy our services. \n 
            <html>
            <body> 
            <a href='http://www.servewise.com/varification.php?id=".$_SESSION['email']."&code=".$security_code."'>Click here to validate your account.
                        </a>
                        </body>
                        </html>";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <noreply@servewise.com>' . "\r\n";



mail($to,$subject,$txt,$headers);
// end
	
*/	
		$checkuser= $user->CheckUser($email);
		
		if (empty($checkuser)){
		    if ($password==$cpassword){
		$signup = $user->newSignUp($email,$password,$security_code,$status);        
		    }else{
		    $message[0] = false;
			$message[1] = "Password Couldn't match.";    
		    }
		
		if (!empty($signup)){
			echo "<script>window.location.href='../View/varification.php?id=".$_SESSION["email"]."'</script> ";
			
		} else {
			$message[0] = false;
			$message[1] = "Sign Up Failed";
		}	
		} else {
		$message[0] = false;
			$message[1] = "Emaild id is already register";
		}
		
        
	}
		
?>