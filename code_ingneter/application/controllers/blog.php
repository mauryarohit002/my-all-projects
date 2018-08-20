<?php 
// echo BASEPATH;
if(!defined('BASEPATH')) exit("NO ACCESS");

class Blog  extends CI_Controller{
	public function index(){
		// echo"test";
		echo "<pre>";
		print_r($this);
		echo "</pre>";
		$this->load->view("blog_view");

	}
}

 ?>