<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');
class Profile extends CI_Controller{
	public function __construct(){
		parent:: __construct();
	}

	public function index(){
		#echo 'Welcome,  ' . $this->session->userdata('username');
		$this->load->view('profile_header');
		$this->load->view('profile_body');
		$this->load->view('profile_footer');
	}
}
?>