<?php  
$result = mysqli_connect("localhost","root","","rohit");
$str ="insert into maurya (name, salary ) values ('qwert',900)";
$result -> query($str);







?>