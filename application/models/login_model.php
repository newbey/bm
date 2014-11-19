<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');
class Login_model extends CI_Model{
	public function __construct(){
		parent:: __construct();
	}

	public function login(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$this->db->where("username", $this->db->escape_str($username));
		$this->db->where("password", $this->db->escape_str($password));

		$query = $this->db->get("user");
		if($query->num_rows()>0){
			foreach($query->result() as $rows){
				$newdata = array(
							'user_id'  => $rows->id,
							'username' => $rows->username,
							'user_email' => $rows->email,
							'logged_in' => TRUE
					);
			}
			$this->session->set_userdata($newdata);
			return true;
		}
		return false;
	}
}
?>