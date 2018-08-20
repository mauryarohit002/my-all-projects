<?php 
	$data= array("Saurabh","Amit","Patil");
	print_r($data);

	echo implode(" ", $data);
	echo "<br>";
	echo implode("-", $data);

	echo "<br>";

	$dob="20/12/1990";
	echo $dob;

	$ans=explode("/",$dob);
	print_r($ans);
 ?>