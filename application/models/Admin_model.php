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
				/***********************************/
				/*     *****  Category  *****      */
				/***********************************/

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
		$this->db->set('publication_status',0);
		$this->db->where('category_id',$category_id);
		$this->db->update('tbl_category');
	}


	public function publish_category($category_id)
	{
		$this->db->set('publication_status',1);
		$this->db->where('category_id',$category_id);
		$this->db->update('tbl_category');
	}


	public function select_category_by_id($category_id)
	{
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('category_id',$category_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

	public function update_category_info()
	{
		$data = array();
		$category_id		= $this->input->post('category_id',true);
		$data['category_name']			= $this->input->post('category_name',true);
		$data['category_description']	= $this->input->post('category_description',true);
		$data['publication_status']		= $this->input->post('publication_status',true);
		$this->db->where('category_id',$category_id);
		$this->db->update('tbl_category',$data);
	}

	public function delete_category($category_id)
	{
		$this->db->where('category_id',$category_id);
		$this->db->delete('tbl_category');
	}


				/***********************************/
				/*  *****  Manufacturer  *****     */
				/***********************************/


	public function	save_manufacture()
	{
	$data=array();
	$data['manufacture_name']			= $this->input->post('manufacture_name',true);
	$data['manufacture_description']	= $this->input->post('manufacture_description',true);
	$data['publication_status']		= $this->input->post('publication_status',true);
	$this->db->insert('tbl_manufacture',$data);

	}

	public function all_manufacture_info()
	{
		$this->db->select('*');
		$this->db->from('tbl_manufacture');
		$query_result = $this->db->get();
		$manufacture_info = $query_result->result();
		return $manufacture_info;
	}



	public function unpublish_manufacture($manufacture_id)
	{
		$this->db->set('publication_status',0);
		$this->db->where('manufacture_id',$manufacture_id);
		$this->db->update('tbl_manufacture');
	}

	public function publish_manufacture($manufacture_id)
	{
		$this->db->set('publication_status',1);
		$this->db->where('manufacture_id',$manufacture_id);
		$this->db->update('tbl_manufacture');
	}


	public function select_manufacture_by_id($manufacture_id)
	{
		$this->db->select('*');
		$this->db->from('tbl_manufacture');
		$this->db->where('manufacture_id',$manufacture_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

	public function update_manufacture()
	{
		$data = array();
		$manufacture_id		= $this->input->post('manufacture_id',true);
		$data['manufacture_name']			= $this->input->post('manufacture_name',true);
		$data['manufacture_description']	= $this->input->post('manufacture_description',true);
		$data['publication_status']		= $this->input->post('publication_status',true);
		$this->db->where('manufacture_id',$manufacture_id);
		$this->db->update('tbl_manufacture',$data);
	}

	public function delete_manufacture($manufacture_id)
	{
		$this->db->where('manufacture_id',$manufacture_id);
		$this->db->delete('tbl_manufacture');
	}

}