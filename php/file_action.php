<?php 
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

echo "<pre>";
print_r($_FILES);
echo "</pre>";

$name=$_FILES['x3']['name'];
//echo $name;
$tmp= $_FILES['x3']['tmp_name'];
//echo $tmp;
$result= move_uploaded_file($tmp,$name);
var_dump($result);

 ?>