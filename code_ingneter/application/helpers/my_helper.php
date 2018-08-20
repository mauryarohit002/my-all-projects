<?php 
if(!function_exists('pre'))
{
	function pre($data){
		// echo 111;
		echo "<pre>";
		print_r($data);
		echo "</pre>";

	}
}
if(!function_exists('ctrl'))
{
	function ctrl($para){
		return base_url().'index.php/sms/'.$para;
	}
}

if(!function_exists('css'))
{
	function css($filename){
	 $path=base_url()."assets/css/$filename.css";
	 echo "<link href='$path' rel='stylesheet' />";
	}
}

if(!function_exists('js'))
{
	function js($filename){
	 $path=base_url()."assets/js/$filename.js";
	 echo "<script src='$path'></script>";
		
	}
}




 ?>