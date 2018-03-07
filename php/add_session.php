<?php 
session_start();
echo session_id();
//print_r($_SERVER);
$_SESSION['name']="ajinkya";
$_SESSION['age']=23;

 ?>
 <a href="show_session.php">show</a>