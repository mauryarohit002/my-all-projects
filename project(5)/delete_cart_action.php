<?php
	// print_r($_POST);
	$id = $_POST['xyz'];
	// echo $id;
	// print_r($_COOKIE);
	$cookiedata = $_COOKIE['products'];
	// echo $cookiedata;
	$arr = explode(",",$cookiedata);
	// print_r($arr);
	foreach($arr as $key=>$val){
		// echo $val;
		if($id == $val){
			// echo $key;
			unset($arr[$key]);
		}	
	}

	// print_r($arr);
	$newdata = implode(",",$arr);
	// echo $newdata;
	setcookie("products",$newdata,time()+3600,"/");
	echo "ok";
?>