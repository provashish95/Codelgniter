<?php
class Login_Model extends CI_Model{

	public function login_action($username, $password){
		$query =$this->db->query("select * from admin_table where username ='".$username."' and password='$password'")->row();
		return $query;
	}
}
