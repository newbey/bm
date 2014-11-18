<?php if ( ! defined('BASEPATH')) exit ('No direct script Access');
class Register extends CI_Controller{
	
	public function __construct(){
		parent:: __construct();
		$this->load->model('register_model');
	}

	public function index(){
		$this->load->view('register_view');
	}

	public function adduser(){
		$this->load->library('form_validation');
		//validate form data
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]|');
		$this->form_validation->set_rules('verifypassword', 'VerifyPassword', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else{
			$this->register_model->register();
			echo 'Success';
		}
	}
}
?>