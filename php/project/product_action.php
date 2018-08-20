<?php 
require_once "db_connect.php";
echo "<pre>";
print_r($_POST);
echo "<pre>";
if(empty($_POST['pro_caid'])){
	$msg="please select category";
}
else if(empty($_POST['pro_brid'])){
	$msg="please select brand";
}
else if(empty($_POST['pro_name'])){
	$msg="please enter product name";
}
else if(empty($_POST['pro_price'])|| !is_numeric($_POST['pro_price']) || $_POST['pro_price']<=0 || $_POST['pro_price']>100000){
	$msg="invalid product price";
}
else if(empty($_POST['pro_discount'])|| !ctype_digit($_POST['pro_discount']) || $_POST['pro_discount']<0 || $_POST['pro_discount']>99){
	$msg="invalid product discount";
}
else if(empty($_POST['pro_desc'])|| strlen($_POST['pro_desc'])<10 || $_POST['pro_desc']>1000 ){
	$msg="invalid product desc";
}
else{
// file uploading and check.
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";

	if(empty($_FILES['pro_path']['name'])){

		$msg="please select product image";
	}
	else if($_FILES['pro_path']['size']>1024*1024){
		$msg="please select image upto 1mb";
	}
	else {
		$arr=array("image/jpeg","image/pjpeg","image/png","image/gif");
		$filetype=$_FILES['pro_path']['type'];
		//echo $filetype;
		if(in_array($filetype,$arr)){
			$tmp=$_FILES['pro_path']['tmp_name'];
			$name="products/".time().$_FILES['pro_path']['name'];
			$fileans=move_uploaded_file($tmp,$name);
			//var_dump($fileans);
		if( $fileans){
			// database insrt;
			$proname=$_POST['pro_name'];
			$price=$_POST['pro_price'];
			$dis=$_POST['pro_discount'];
			$desc=$_POST['pro_desc'];
			$cid=$_POST['pro_caid'];
			$bid=$_POST['pro_brid'];

			$str="insert into products(pro_name,pro_price,pro_discount,pro_description,pro_caid,pro_brid,pro_path) values('$proname','$price','$dis','$desc','$cid','$bid','$name')";
			$res=$conn->query($str) or die($conn->error);
			if($res){
				$msg="product added";
			}

		}
		
		else{
			$msg="error in file uploading.";
		}
		}
	
	else{
		$msg="file type invalid";
	}
}
}
echo $msg;

 ?>
