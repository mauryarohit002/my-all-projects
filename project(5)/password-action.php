<?php
	require_once 'db_connect.php';
	// print_r($_POST);
	// exit;
	if(empty($_POST['cpass'])){
		$msg = "Please enter current Password";
	}
	else if(empty($_POST['npass'])){
		$msg = "Please enter new Password";
	}
	else if(empty($_POST['cnpass']) || $_POST['cnpass']!=$_POST['npass']){
		$msg = "new pass and confirm new pass does not match";
	}
	else if($_POST['cpass']==$_POST['npass']){
		$msg = "new pass should be diff from current pass";
	}
	else{
		// $curpass = sha1($_POST['cpass']);
		// echo $curpass;
		// print_r($_SESSION);
		// $userid = $_SESSION['log_id'];
		// echo $userid;
		// $str = "select log_password from users where log_id='".$_SESSION['log_id']."'";
		// echo $str;
		//mysqli_query($conn,$str)
		$res = $conn->query("select log_password from users where log_id='".$_SESSION['log_id']."'") or die($conn->error);
		// print_r($res);
		//mysqli_fetch_assoc();
		$dbpass = $res->fetch_array(MYSQLI_ASSOC);
		// print_r($dbpass);

		if($dbpass['log_password']!=sha1($_POST['cpass'])){
			$msg = "Current password mismatch";
		}
		else{
			// echo 11;
			$newpass = sha1($_POST['npass']);
			$str = "update users set log_password='$newpass' where log_id='".$_SESSION['log_id']."' ";
			// echo $str;
			$result = $conn->query($str) or die($conn->error);
			if($result){
				$msg = "Password updated";
			}

		}
	}
	echo $msg;
?>