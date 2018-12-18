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


	public function register_new_admin()
	{
		$data['username'] = $this->input->post('username', True);
		$data['email'] = $this->input->post('email', True);
		$data['password'] = md5($this->input->post('password', True));	
		$data['image'] = 'user.jpg';
		$data['phone_number'] = '';
		$data['role'] = 1;

		$this->db->insert('akt_users', $data);
	}

}