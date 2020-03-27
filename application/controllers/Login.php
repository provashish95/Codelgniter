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
		$this->load->view('login/login');
	}
	public function login_action(){

		$validation = $this->Login_Model->rules();
		if ($validation->run() == FALSE){
			redirect(base_url('login'));
		}else{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$result = $this->Login_Model->login_action($username, $password);
			if (!$result){
				$this->session->set_flashdata('user_success', 'Your username or password incorrect');
				redirect('login');
			}else{
				$data = array(
					'full_name' => $result->fullname,
					'user_name' => $result->username,
					'user_email' => $result->email,
					'user_id' => $result->id,
					'user_loggedin' => true,
				);
				$this->session->set_userdata('user_details',$data);
				//var_dump($this->session->userdata('full_name'));
				//exit();
				//var_dump($data);
				redirect(base_url('student'));
			}
		}
	}

	public  function logout(){
		if ($this->session->userdata('user_details')){
			$this->session->unset_userdata('user_details');
			$this->session->set_flashdata('user_success', 'Your are Logout!');
			redirect(base_url("login"));

		}else{
			redirect(base_url("login"));
		}
	}
	public function view_all(){
		$result['data']= $this->Login_Model->get_all();
		$this->load->view('student/student_add', $result);
	}
}
