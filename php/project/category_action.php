<?php
require_once 'db_connect.php';
// print_r($_POST);

$data=$_POST['ca_name'];
//echo $data;

//print_r($conn);

$str="insert into categories (ca_name) values ('$data')";
//echo $str;

$result = mysqli_query($conn, $str) or die(mysqli_error($conn));
var_dump($result);
if($result) {
	header("location:add_category.php");
}

?>
