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


	public function save_category()
	{
		$data=array();
		$data['category_name']			= $this->input->post('category_name',true);
		$data['category_description']	= $this->input->post('category_description',true);
		$data['publication_status']		= $this->input->post('publication_status',true);
		$this->db->insert('tbl_category',$data);
	}

	public function all_category_info()
	{
		$this->db->select('*');
		$this->db->from('tbl_category');
		$query_result = $this->db->get();
		$category_info = $query_result->result();
		return $category_info;
	}


	public function unpublish_category($category_id)
	{
		$this->db->select('*');
		$this->db->from('tbl_category');
		$query_result = $this->db->get();
		$category_info = $query_result->result();
		return $category_info;
	}

}