<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');
class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index(){
		$data['title'] = 'Login';
		$this->load->view('header_view',$data);
		$this->load->view('login_view');
		$this->load->view('footer_view');
	}

	public function signin(){
		$this->load->library('form_validation');
		//Validate form data
		$this->form_validation->set_rules('username','Username', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');

		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else{
			$this->login_model->login();
			redirect('profile');
			#echo 'You are logged in';
			#var_dump($this->session->userdata('username'));
		}
	}
}
?>
