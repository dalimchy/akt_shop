<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {


	public function check_admin_info($email,$password)
	{
		$this->db->select('*');
		$this->db->from('akt_users');
		$this->db->where('email',$email);
		$this->db->where('password',md5($password));
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

}