<?php
	require_once 'db_connect.php';
	
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";

	if(empty($_POST['pro_caid'])){
		$msg = "Please Select Category";
	}
	else if(empty($_POST['pro_brid'])){
		$msg = "Please Select Brand";
	}
	else if(empty($_POST['pro_name'])){
		$msg = "Please Enter Product name";
	}
	else if(empty($_POST['pro_price']) || !is_numeric($_POST['pro_price']) || $_POST['pro_price']<=0 || $_POST['pro_price']>100000){
		$msg = "Invalid Product Price";
	}
	else if(empty($_POST['pro_discount']) || !ctype_digit($_POST['pro_discount']) || $_POST['pro_discount']<0 || $_POST['pro_discount']>99){
		$msg = "Invalid Product Discount";
	}
	else if( empty($_POST['pro_desc']) || strlen($_POST['pro_desc'])<10 || strlen($_POST['pro_desc'])>1000 ){
		$msg = "Invalid Product Desc";

	}
	else{
		//FILE UPLOADING & CHECK
		echo "<pre>";
		print_r($_FILES);
		echo "</pre>";

		if( empty($_FILES['pro_path']['name'])){
			$msg= "please select Product Image";
		}
		else if($_FILES['pro_path']['size'] > 1024*1024){
			$msg= "please select Image upto 1MB";
		}
		else
		{
			$arr = array(
				"image/jpeg","image/pjpeg","image/png","image/gif"
			);
			$filetype = $_FILES['pro_path']['type'];
			// echo $filetype;

			if( in_array($filetype,$arr) ){

				$tmp = $_FILES['pro_path']['tmp_name'];
				$name = "products/".time().$_FILES['pro_path']['name'];

				$fileans = move_uploaded_file($tmp, $name);
				// var_dump($fileans);

				// $msg = "ok";
				if($fileans){
					//database insert
					$proname = $_POST['pro_name'];
					$price = $_POST['pro_price'];
					$discount = $_POST['pro_discount'];
					$desc = $_POST['pro_desc'];
					$cid = $_POST['pro_caid'];
					$bid = $_POST['pro_brid'];
					
					$str = "insert into products (pro_name,pro_price,pro_discount,pro_description,pro_brid,pro_caid,pro_path) values ('$proname','$price','$discount','$desc','$bid','$cid','$name')";
					$res = $conn->query($str) or die($conn->error);
					if($res){
						$msg = "Product Added";
					}
				}
				else{
					$msg = "Error in File Upload";
				}
			}
			else{
				$msg = "file type invalid";
			}
		}
	}
	echo $msg;
?>