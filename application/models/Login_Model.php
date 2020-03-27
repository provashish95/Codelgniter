<?php
class Login_Model extends CI_Model{

	public function login_action($username, $password){
		$query =$this->db->query("select * from admin_table where username ='".$username."' and password='$password'")->row();
		return $query;
	}
	public function rules(){
		$config = array(
			array(
				'field' => 'username',
				'label' => 'User Name',
				'rules' => 'required'
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required'
			)
		);
		return $this->form_validation->set_rules($config);
	}
	public function get_all(){
		$query = $this->db->query('select * from admin_table');
        return $query;
	}
}
