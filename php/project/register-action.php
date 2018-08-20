<?php 
require_once 'db_connect.php';
echo "<pre>";
print_r($_POST);

// if(empty($_POST['log_name'])) {

// $msg="please enter name";
// 	}
// elseif(empty($_POST['log_mobile'])){
// 	$msg="please enter mobile";
// }	
// elseif(empty($_POST['log_email'])){
// 	$msg="please enter email";
// }	
// elseif(empty($_POST['log_password'])){
// 	$msg="please enter password";
// }	

if(!preg_match("/^[a-zA-Z][a-zA-Z]{1,}[a-zA-Z]$/", $_POST['log_name'])){
	$msg="invalid name.";
}
elseif(!preg_match("/^[1-9][0-9]{9}$/", $_POST['log_mobile'])){
	$msg="invalid mobile.";
}
elseif(!preg_match("/^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9\-]+[a-zA-Z0-9])\.([a-zA-Z]{2,})(\.[a-zA-Z]{2,})?$/", $_POST['log_email'])){
	$msg="invalid emailid.";
}
elseif(!preg_match("/^[a-zA-Z1-9][a-zA-Z0-9]{3,11}$/", $_POST['log_password'])){
	$msg="invalid password.";
}

elseif(empty($_POST['log_cpassword'])|| ($_POST['log_cpassword']!=$_POST['log_password'])){
	$msg="please enter valid confirm password";
}	

else{
$name=$_POST['log_name'];
$mobile=$_POST['log_mobile'];
$email=$_POST['log_email'];
$password=sha1($_POST['log_password']);
//echo $password;

//check imailid exist;
$str_check="select count(*) as cnt from users where log_email='$email' ";
//echo $str_check;
$res_cnt= mysqli_query($conn,$str_check) or die(mysqli_error($conn));
//print_r($res_cnt);
$final_cnt=mysqli_fetch_assoc($res_cnt);
//print_r($final_cnt);
//exit;

if($final_cnt['cnt']>0){
	$msg="user exist";
}

else{
$str="insert into users(log_name,log_email,log_password,log_mobile)values('$name','$email','$password','$mobile')";
//echo $str;

$result=mysqli_query($conn,$str) or die(mysqli_error($conn));
if($result==true){
	$msg="user added";
}
}
}

 echo $msg;
 ?>
