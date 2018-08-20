<?php 
require_once 'db_connect.php';
//print_r($_POST);

if(empty($_POST['log_email'])){
$msg="please enter email";

}
else if (empty($_POST['log_password'])) {
$msg="please enter password";	
}
else{	
	$email=$_POST['log_email'];
	$txt_password=sha1($_POST['log_password']);
//echo $email;
//echo $txt_password;

$str="select * from users where log_email='$email'";
//echo $str;
$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
//print_r($res);
if($res->num_rows>0){
$db_record=mysqli_fetch_assoc($res);
// echo "<pre>";
// print_r($db_record);
// echo "</pre>";
if($txt_password != $db_record['log_password']){
	$msg="password for given emailid does not match";
}
else{
$_SESSION['log_id'] = $db_record['log_id'];
$_SESSION['log_name'] = $db_record['log_name'];
$_SESSION['log_mobile'] = $db_record['log_mobile'];
$_SESSION['log_email'] = $db_record['log_email'];
$_SESSION['log_status'] = $db_record['log_status'];

	$msg="ok";
}
}
else{
	$msg="email does not exist";
}

}
// if($msg == "ok"){
// 	//print_r($_SESSION);
// 	header("location:index.php");
// }
// else{
// 	echo $msg;
// }
echo $msg;
 ?>