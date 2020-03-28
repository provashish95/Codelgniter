<?php
class Login extends  CI_Controller{
	public function __construct()
	{
		parent:: __construct();
		//$this->load->model('Student_Model');
        $this->load->database();
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('Login_Model');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}
	public function index(){
		if (!empty($this->session->userdata('user_loggedin')) && $this->session->userdata('user_loggedin')==true) {
			redirect(base_url('student'));
		}else{
		$this->load->view('login/login');
	}
} 
	public function login_action(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
		$result = $this->Login_Model->login_action($username, $password);
		if (!$result){
			redirect(base_url('login'));
		}else{
			$data = array(
				'user_name' => $result->username,
				'full_name' => $result->fullname,
				'user_email' => $result->email,
				'user_id' => $result->id,
				'user_loggedin' => true,
			);
			$this->session->set_userdata($data);
			    redirect(base_url('student'));
		}
	}

		
	function user_logout(){

	if (!empty($this->session->userdata('user_loggedin'))  && $this->session->userdata('user_loggedin')==true){
         		   $this->session->sess_destroy();
	               redirect(base_url("login"));
         	}
         	else {
         		redirect(base_url("login"));
         	}
	}
	public function user_profile(){
		if (!empty($this->session->userdata('user_loggedin')) && $this->session->userdata('user_loggedin') == true) {
           $user = $this->session->userdata('user_id');
           $this->data['user'] = $this->Login_Model->view_user_by_id($user);
           //var_dump($this->data);
           //exit();
      		//$this->data['user_profile']=$this->Login_Model->view_user_by_id($user_id);
           $this->load->view("login/user-profile", $this->data);
           }else{
           	redirect(base_url('login'));
           }
	}
	public function update_profile(){
		if (!empty($this->session->userdata('user_loggedin')) && $this->session->userdata('user_loggedin') == true) {

		$id = $this->input->post('id');
		$data = array(
       'username' =>$this->input->post('username'),
       'fullname' =>$this->input->post('fullname'),
       'email' =>$this->input->post('email'),
       'password' =>$this->input->post('password')
		);

		$result = $this->Login_Model->update_profile($id, $data);
		redirect(base_url('student'));
	}else{
		redirect(base_url('login'));
	}
}


}
