<?php
require_once 'db_connect.php';

if(empty($_POST['cpass'])){
	$msg="please enter current password";
}
else if(empty($_POST['npass'])){
	$msg="please enter new password";
}

else if(empty($_POST['cnpass'])||$_POST['cnpass']!=$_POST['npass']){
	$msg ="new password and confirm password doesnt match";
}
else if($_POST['cpass']==$_POST['npass']){
	$msg ="new password should be different from current password";
}
else{
	$curpass= sha1($_POST['cpass']);
	//echo $curpass;
	//print_r($_SESSION);
	$userid =$_SESSION['log_id'];
	//echo $userid;
	$str ="select log_password from users where log_id='$userid'";
	//echo $str;
	$res =$conn->query($str) or die($conn->error);
	//print_r($res);
	$dbpass = $res->fetch_array(MYSQLI_ASSOC);
	//print_r($dbpass);

	if($dbpass['log_password']!=sha1($_POST['cpass'])){
		$msg="current password mismatch";
	}

else{
	$newpass=sha1($_POST['npass']);
	$str ="update users set log_password='$newpass' where log_id='$userid'";
	$res= $conn->query($str) or die($conn->error);
	//var_dump($res);
	if($res){
		$msg="ok";
	}
}
}

echo $msg;
?>