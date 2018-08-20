<?php 
if(!defined('BASEPATH')) exit('not access');
class website extends CI_Controller{
	function index(){
		// $this->load->database();
		$this->load->view('index');
	}
	function about(){
		$this->load->view('about_view');

	}
	function service(){
		$this->load->view('service_view');

	}
	function product($a,$b){
		echo $a;
		echo $b;

	}

	function form_action(){
		// echo "test";
		// print_r($_POST);
		 // print_r($_POST['x1']);
		// $ans=$this->input->post('x1');
				$ans=$this->input->post();

		pre($ans);

	}


}




 ?>