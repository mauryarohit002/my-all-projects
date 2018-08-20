<?php
if(!defined('BASEPATH')) exit('not access');

class Sms_model extends CI_Model{
	public function register_insert($data){
		// echo "test";
		// pre($data);
		// $results=$this->db->insert('sms_users',$data);
		// var_dump($results);
		return $this->db->insert('sms_users',$data);
	}
	public function auth(){
		// echo "test";
		// pre($_POST);
		$tablename=end($_POST);
		// echo $tablename;
		array_pop($_POST);
		// pre($_POST);
		$emailid=current($_POST);
		// echo $emailid;
		$password=do_hash(next($_POST)); 
		// echo $password;
		$keys=array_keys($_POST);
		// pre($keys);
		$colemail=current($keys);
		$colpassword=next($keys);
		// echo $colemail;
		// select user_password from sms_users where user_email='hhh@hh.com'
		$this->db->select($colpassword);
		$results_rows=$this->db->get_where($tablename,array($colemail=>$emailid));
		// pre($results_rows);
		if($results_rows->num_rows>0){
			// $ans=$results_rows->result();
			$ans=$results_rows->result_array();
           // pre($ans);
           if($ans[0]['user_password']==$password){
           	return true;
           }
           else{
           	return false;
           }
		}
		else{
			return false;
		}
	}

}




?>

