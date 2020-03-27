<?php
class Student extends  CI_Controller{
	public function __construct()
	{
		parent:: __construct();
		//$this->load->model('Student_Model');
        $this->load->database();
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
	}
	public function index(){

		if ($this->session->userdata('user_details')) {
			$this->load->view('student/student_add');
		}else{
			redirect(base_url("login"));
		}
	}

}
