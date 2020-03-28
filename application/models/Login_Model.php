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
	public function view_user_by_id($id){

			$query = $this->db->query("select * from admin_table where id='$id'");
			return $query->row();

	}
	public function update_profile($id,$data){
       $this->db->where('id', $id);
		 return $this->db->update('admin_table', $data);
	}
}
