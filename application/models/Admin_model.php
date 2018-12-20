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
		$data['username'] 		= $this->input->post('username', True);
		$data['email'] 			= $this->input->post('email', True);
		$data['password'] 		= md5($this->input->post('password', True));	
		$data['image'] 			= 'user.jpg';
		$data['phone_number'] 	= '';
		$data['role']			= 1;

		$this->db->insert('akt_users', $data);
	}
				/***********************************/
				/*     *****  Category  *****      */
				/***********************************/

	public function save_category($category_image)
	{
		$data=array();
		$data['category_name']			= $this->input->post('category_name',true);
		$data['category_image']			= $category_image;
		$data['category_description']	= $this->input->post('category_description',true);	
		$data['publication_status']		= $this->input->post('publication_status',true);
		$this->db->insert('tbl_category',$data);
	}

	public function all_category_info()
	{
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->order_by("category_id", "desc");
		$query_result 	= $this->db->get();
		$category_info 	= $query_result->result();
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
		$query_result 	= $this->db->get();
		$result 		= $query_result->row();
		return $result;
	}

	public function select_all_publish_category_info()
	{
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('publication_status',1);
		$query_result	= $this->db->get();
		$result 		= $query_result->result();
		return $result;
	}

	public function update_category_info($category_image)
	{

		$data= array();
		$data['category_name']			= $this->input->post('category_name',true);
		$category_id 					= $this->input->post('category_id', True);
		$data['category_description']	= $this->input->post('category_description',true);
		$data['publication_status'] 	= $this->input->post('publication_status', True);
		$data['category_image'] 		= $category_image;
	

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


	public function	save_manufacture($manufacture_image)
	{
		$data=array();
		$data['category_id']				= $this->input->post('category_id',true);
		$data['manufacture_name']			= $this->input->post('manufacture_name',true);
		$data['manufacture_image']			= $manufacture_image;
		$data['manufacture_description']	= $this->input->post('manufacture_description',true);
		$data['publication_status']			= $this->input->post('publication_status',true);
		$this->db->insert('tbl_manufacture',$data);

	}

	public function all_manufacture_info()
	{
		$this->db->select('*');
		$this->db->from('tbl_manufacture');
		$this->db->order_by("manufacture_id", "desc");
		$query_result 		= $this->db->get();
		$manufacture_info 	= $query_result->result();
		return $manufacture_info;
	}


	public function select_all_publish_manufacture_info()
	{
		$this->db->select('*');
		$this->db->from('tbl_manufacture');
		$this->db->where('publication_status',1);
		$query_result 	= $this->db->get();
		$result 		= $query_result->result();
		return $result;
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
		$query_result 	= $this->db->get();
		$result 		= $query_result->row();
		return $result;
	}

	public function update_manufacture_info($manufacture_image)
	{
		
		$data = array();
		$manufacture_id						= $this->input->post('manufacture_id',true);
		$data['category_id']				= $this->input->post('category_id',true);
		$data['manufacture_name']			= $this->input->post('manufacture_name',true);
		$data['manufacture_image'] 			= $manufacture_image;
		$data['manufacture_description']	= $this->input->post('manufacture_description',true);
		$data['publication_status']			= $this->input->post('publication_status',true);
		$this->db->where('manufacture_id',$manufacture_id);
		$this->db->update('tbl_manufacture',$data);
	}

	public function delete_manufacture($manufacture_id)
	{
		$this->db->where('manufacture_id',$manufacture_id);
		$this->db->delete('tbl_manufacture');
	}

	public function save_product_info()
	{
		$data=array();
		$data['product_name']				= $this->input->post('product_name',true);
		$data['category_id']				= $this->input->post('category_id',true);
		$data['manufacture_id']				= $this->input->post('manufacture_id',true);
		$data['product_short_description']	= $this->input->post('product_short_description',true);
		$data['product_long_description']	= $this->input->post('product_long_description',true);
		$data['product_price']				= $this->input->post('product_price',true);
		$data['product_new_price']			= $this->input->post('product_new_price',true);
		$data['product_quantity']			= $this->input->post('product_quantity',true);
		// $data['product_image']			= $this->input->post('product_image',true);



				$sdata = array();
				$error = "";

                $config['upload_path']          = 'upload/';
                $config['allowed_types']        = 'jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('product_image'))
                {
                        $error =  $this->upload->display_errors();

                        // $this->load->view('upload_form', $error);
                }
                else
                {
                        $sdata =  $this->upload->data();
                        $data['product_image'] = $config['upload_path'].$sdata['file_name'];

                        // $this->load->view('upload_success', $data);
                }

		$is_featured			= $this->input->post('is_featured',true);

		if ($is_featured== "on") 
		{
			$data['is_featured'] = 1;
		}
		else
		{
			$data['is_featured'] = 0;
		}
		$data['publication_status']			= $this->input->post('publication_status',true);
		$this->db->insert('tbl_product',$data);
	}


	public function all_product_info()
	{
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->order_by("product_id", "desc");
		$query_result = $this->db->get();
		$product_info = $query_result->result();
		return $product_info;
	}

	public function unpublish_product($product_id)
	{
		$this->db->set('publication_status',0);
		$this->db->where('product_id',$product_id);
		$this->db->update('tbl_product');
	}

	public function publish_product($product_id)
	{
		$this->db->set('publication_status',1);
		$this->db->where('product_id',$product_id);
		$this->db->update('tbl_product');
	}


	public function delete_product($product_id)
	{
		$this->db->where('product_id',$product_id);
		$this->db->delete('tbl_product');
	}

	public function product_info_by_id($product_id){
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('product_id',$product_id);
		$query_result 	= $this->db->get();
		$result 		= $query_result->row();
		return $result;
	}


	public function update_product($product_image)
	{
		$data = array();
		$data['product_name']		 		= $this->input->post('product_name', True);
		$product_id 						= $this->input->post('product_id', True);
		$data['category_id'] 				= $this->input->post('category_id', True);
		$data['manufacture_id']				= $this->input->post('manufacture_id', True);
		$data['product_short_description'] 	= $this->input->post('product_short_description', True);
		$data['product_long_description'] 	= $this->input->post('product_long_description', True);
		$data['product_price'] 				= $this->input->post('product_price', True);
		$data['product_new_price'] 			= $this->input->post('product_new_price', True);
		$data['product_quantity'] 			= $this->input->post('product_quantity', True);
		$data['publication_status'] 		= $this->input->post('publication_status', True);
		$data['product_image'] 				= $product_image;
		$is_featured 						= $this->input->post('is_featured', TRUE);
		if ($is_featured == NULL) {
			$data['is_featured'] = 0;
		}
		elseif($is_featured == 'on'){
			$data['is_featured'] = 1;
		}

		$this->db->where('product_id', $product_id);
		$this->db->update('tbl_product', $data);
	}

		

}