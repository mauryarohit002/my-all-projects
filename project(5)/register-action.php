<?php
	require_once 'db_connect.php';
	// echo "<pre>";
	// print_r($_POST);
	if( !preg_match("/^[a-zA-Z][a-zA-Z ]{1,}[a-zA-Z]$/", $_POST['log_name']) )
	{
		$msg = "invalid Name";
	}
	else if( !preg_match("/^[1-9][0-9]{9}$/", $_POST['log_mobile']) )
	{
		$msg = "invalid Mobile";
	}
	else if( !preg_match("/^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9\-]+[a-zA-Z0-9])\.([a-zA-Z]{2,})(\.[a-zA-Z]{2,})?$/", $_POST['log_email']) )
	{
		$msg = "invalid Emailid";
	}
	else if( !preg_match("/^[a-zA-Z1-9][a-zA-Z0-9]{3,11}$/", $_POST['log_password']) )
	{
		$msg = "invalid Password";
	}
	else if($_POST['log_cpassword']!=$_POST['log_password']){
		$msg = "Please enter valid confirm password";
	}
	else{
		$name = $_POST['log_name'];
		$mobile = $_POST['log_mobile'];
		$email = $_POST['log_email'];
		$password = sha1($_POST['log_password']);
		// echo $password;


		//check emailid exist
		$str_check = "select count(*) as cnt from users where log_email='$email' ";
		// echo $str_check;
		$res_cnt = mysqli_query($conn,$str_check) or die(mysqli_error($conn));
		// print_r($res_cnt);
		$final_cnt = mysqli_fetch_assoc($res_cnt);
		// print_r($final_cnt);
		// exit;
		if($final_cnt['cnt'] > 0){
			$msg = "user exist";
		}
		else{
			$str = "insert into users (log_name,log_email,log_password,log_mobile) values ('$name','$email','$password','$mobile')";
			// echo $str;
			$result = mysqli_query($conn,$str) or die(mysqli_error($conn));
			
			//sms code written here
				// Authorisation details.
				$username = "adnan.d@somaiya.edu";
				$hash = "2deec47c9ee896b5b5592f3240a4457055c5ea02cbe96e01009d22f4ea4e50ab";

				// Config variables. Consult http://api.textlocal.in/docs for more info.
				$test = "0";

				// Data for text message. This is the text message data.
				$sender = "TXTLCL"; // This is who the message appears to be from.
				$numbers = "91$mobile"; // A single number or a comma-seperated list of numbers
				$message = "Swagat hai aapka E-shopper mai";
				// 612 chars or less
				// A single number or a comma-seperated list of numbers
				$message = urlencode($message);
				$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
				$ch = curl_init('http://api.textlocal.in/send/?');
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$result = curl_exec($ch); // This is the result from the API
				print_r($result);
				curl_close($ch);
			//en of sms code

			if($result==true){
				$msg = "User Added";
			}
		}	
		
	}
	echo $msg;
?>