<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_controller extends CI_Controller{

	public function index(){
         $this->load->helper('xyz');
         test();
		$data['users'] = $this->User_model->get_data();
		$this->load->view('users', $data);
	}

}
