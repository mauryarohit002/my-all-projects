<?php 
print_r($_GET);
$id = $_GET['abcd'];
//echo $id;
$result =mysqli_connect("localhost","root","","rohit");

$str = "delete from maurya where id='$id'";
//echo $str;
$ans = $result->query($str) or die($result->error);
//var_dump($ans);
mysqli_close($result);

header("location:select query.php");




 ?>