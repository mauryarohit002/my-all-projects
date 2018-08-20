<?php 
session_start();
echo session_id();
print_r($_SESSION);


 ?>
 <a href="session_destroy.php">delete</a>