<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');
class Home extends CI_controller{
	public function __construct(){
		parent:: __construct();
	}

	public function index(){
		#echo 'Hello World';
		$this->load->view('home_header');
		$this->load->view('home_body');
		$this->load->view('home_footer');
	}
}
?>