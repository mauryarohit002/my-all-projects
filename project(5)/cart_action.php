<?php
	// print_r($_POST);
	$data = $_POST['xyz'];
	// echo $data;

	if(!isset($_COOKIE['products'])){
		setcookie("products" , $data  , time()+3600 , "/");
		echo "Record Added In Cart";
	}
	else{
		// echo 22;
		$newdata = $_COOKIE['products'] . "," . $data;
		// echo $newdata;
		setcookie("products" , $newdata  , time()+3600 , "/");
		echo "Record Updated In Cart";

	}
?>