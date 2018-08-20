<?php 
if(!defined('BASEPATH')) exit('not access');
class sms extends CI_Controller{
	public function __construct(){
		// echo 111;
		// CI_Controller::__construct();
		parent::__construct();
			$this->load->model('sms_model');
			$username=$this->session->userdata('username');
			// echo $username;
			$func=$this->uri->segment(2);

			if(!empty($username)){
				//register,login
				if(in_array($func, array("register","login","register_action","login_action"))==1){
					redirect(base_url());
				}
			}
			else{
				if($func=="password"){
					redirect(base_url());
				}
			}
	}
	public	function index(){
		// $this->session->set_userdata('username','rohit');
		$this->load->view('index');
	}
	public function register(){
		
		$this->load->view("register_view");
	}
	public function register_action(){
		$ans = $this->input->post();
		// pre($ans);
		$this->form_validation->set_rules('user_fname','First name','required|min_length[2]|alpha');
		$this->form_validation->set_rules('user_lname','Last name','required|min_length[2]|alpha');
		$this->form_validation->set_rules('user_email','Email ID','required|valid_email|is_unique[sms_users.user_email]');
		$this->form_validation->set_rules('user_password','Password','required|min_length[4]|max_length[12]|alpha_numeric|matches[user_cpassword]');
	
		if($this->form_validation->run()==FALSE){
			// echo FAIL;
			echo validation_errors();
		}
		else{
			// echo "ok";
			unset($ans['user_cpassword']);
		
		$ans['user_password']=do_hash($ans['user_password']);
		// pre($ans);

		if($this->sms_model->register_insert($ans))
		{
			echo "User added";
			//sms
		}


		}

	}
	public function login(){
		
		$this->load->view("login_view");
	}
public function login_action(){
		$ans = $this->input->post();
		// pre($ans);

		$this->form_validation->set_rules('user_email','Email ID','required|valid_email');
		$this->form_validation->set_rules('user_password','Password','required|min_length[4]|max_length[12]|alpha_numeric');
	
		if($this->form_validation->run()==FALSE){
			// echo FAIL;
			echo validation_errors();
		}
		else{
			// echo "ok";
			if($this->sms_model->auth())
			{
				// echo "DASH";
				$this->session->set_userdata('username',$ans['user_email']);
				// redirect(base_url());
				echo 1;
			}
			else{
				echo"invalid credential";
			}

		}

		
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
		redirect(base_url());

		}

		public function change_password(){
		$this->load->view("password_view");
	}


	}







 ?>