<?php
class Student extends  CI_Controller{
	public function __construct()
	{
		parent:: __construct();
		//$this->load->model('Student_Model');
        $this->load->database();
		$this->load->helper(array('form', 'url'));
	}
	public function index(){
		$this->load->view('student/student_add');
	}
}
