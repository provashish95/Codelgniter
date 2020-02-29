<?php
class User_model extends CI_Model{

	public function get_data(){

//		$data = $this->db->query("select * from user_table");
//		$result = $d->result();
////		print_r($result);
//          return $d->result();
		$this->db->select("*");
		$this->db->where("id",2);
		$data = $this->db->get("user_table");
		return $data->result_array();
	}
}
