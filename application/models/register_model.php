<?php if ( ! defined('BASEPATH')) exit ('No direct script access');
class Register_model extends CI_Model {
	public function __construct(){
		parent:: __construct();
	}

	public function register(){
		$username = $this->input->post('username');
		$email    = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$data=array(
				'username' => $this->db->escape_str($username),
				'email' => $this->db->escape_str($email),
				'password' => $this->db->escape_str($password)
			);
		$this->db->insert('user',$data);
	}
}
?>