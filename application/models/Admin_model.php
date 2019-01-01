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
	
	public function check_customar_info($email,$password)
	{
		$this->db->select('*');
		$this->db->from('tbl_customers');
		$this->db->where('customer_email',$email);
		$this->db->where('customer_password',md5($password));
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
		$data['manufacture_for']			= $this->input->post('manufacture_for',true);
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

	public function delete_manufacturebyCate($category_id)
	{
		$this->db->where('category_id',$category_id);
		$this->db->delete('tbl_manufacture');
	}


	// /Dependent select option
	
	public function getSubCateBy_category($category_id)
	{
		$this->db->where('category_id', $category_id);
		$this->db->order_by('manufacture_name ', 'ASC');
		$query = $this->db->get('tbl_manufacture');
		$subCate_query =  $query->result();
		$output = '<option disabled selected>Please select</option>';

		foreach($subCate_query as $row)
		{
			$output .= '<option value="'.$row->manufacture_id.'">'.$row->manufacture_name.'</option>';
		}
		return $output;
	}

	public function save_product_info()
	{
		$data=array();
		$data['product_name']				= $this->input->post('product_name',true);
		$data['brand_id']				= $this->input->post('brand_id',true);
		$data['category_id']				= $this->input->post('category_id',true);
		$data['manufacture_id']				= $this->input->post('manufacture_id',true);
		$data['product_model']				= $this->input->post('product_model',true);
		$data['product_for']				= $this->input->post('product_for',true);
		$data['product_short_description']	= $this->input->post('product_short_description',true);
		$data['product_long_description']	= $this->input->post('product_long_description',true);
		$data['product_price']				= $this->input->post('product_price',true);
		$data['product_new_price']			= $this->input->post('product_new_price',true);
		$data['product_quantity']			= $this->input->post('product_quantity',true);
		// $data['product_image']			= $this->input->post('product_image',true);

			$img1 = array();
			$img2 = array();
			$img3 = array();
			$img4 = array();
			$img5 = array();
			$error = "";

			$config['upload_path']          = 'upload/products/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 1000;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('product_image')) {
					$error =  $this->upload->display_errors();
			}else {
					$img1 =  $this->upload->data();
					$data['product_image'] = $config['upload_path'].$img1['file_name'];
			}
			if ( ! $this->upload->do_upload('product_image2')) {
					$error =  $this->upload->display_errors();
			}else {
					$img2 =  $this->upload->data();
					$data['product_img2'] = $config['upload_path'].$img2['file_name'];
			}
			if ( ! $this->upload->do_upload('product_image3')) {
					$error =  $this->upload->display_errors();
			}else {
					$img3 =  $this->upload->data();
					$data['product_img3'] = $config['upload_path'].$img3['file_name'];
			}
			if ( ! $this->upload->do_upload('product_image4')) {
					$error =  $this->upload->display_errors();
			}else {
					$img4 =  $this->upload->data();
					$data['product_img4'] = $config['upload_path'].$img4['file_name'];
			}
			if ( ! $this->upload->do_upload('product_image5')) {
					$error =  $this->upload->display_errors();
			}else {
					$img5 =  $this->upload->data();
					$data['product_img5'] = $config['upload_path'].$img5['file_name'];
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

	public function delete_productbyCate($category_id)
	{
		$this->db->where('category_id',$category_id);
		$this->db->delete('tbl_product');
	}
	public function delete_productbyManu($manufacture_id)
	{
		$this->db->where('manufacture_id',$manufacture_id);
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
		$data['product_model']				= $this->input->post('product_model', True);
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

	public function product_details($product_id){
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('product_id',$product_id);
		$query_result 	= $this->db->get();
		$result 		= $query_result->row();
		return $result;
	}

	public function brand_info()
	{
		$data = array();

		$data['brand_name'] = $this->input->post('brandname',true);

		// $logo = array();
		// $error = "";

		$config['upload_path']          = 'upload/brand/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['max_size']             = 1000;
		$config['file_name'] = time().'_'.$_FILES['brandlogo']['name']; 
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);
		$file_path = $config['upload_path'].$logo['file_name'];

		if ( ! $this->upload->do_upload('brandlogo')) {
			$error = array('error' => $this->upload->display_errors());
			$data['brand_error'] = $error;
		}else {
			$logo =  $this->upload->data();
			$data['brand_logo'] = $config['upload_path'].$logo['file_name'];
		}
		$this->db->insert('tbl_brand', $data);

	}

	public function get_all_brands()
	{
		// $query = $this->db->get('tbl_brand'); 
		$this->db->select('*');
		$this->db->from('tbl_brand');
		$this->db->order_by("brand_id", "desc");
		$query_result 	= $this->db->get();
		$brands_info 	= $query_result->result();
		return $brands_info;
	}

	public function delete_brand($brand_id)
	{
		$this->db->select('brand_logo');
		$this->db->from('tbl_brand');
		$this->db->where('brand_id',$brand_id);
		$query_result = $this->db->get();
		$data = $query_result->row();

		$this->db->where('brand_id', $brand_id);
		$delete_result = $this->db->delete('tbl_brand');
		if($delete_result){
			return $data;
		}else{
			return false;
		}
	}

	public function delete_productBy_brand($brand_id)
	{
		$this->db->where('brand_id', $brand_id);
		$this->db->delete('tbl_product');
	}
	
	public function register_new_customer()
	{
		$data['customer_name'] 		= $this->input->post('customer_name', True);
		$data['customer_email'] 			= $this->input->post('customer_email', True);
		$data['customer_password'] 		= md5($this->input->post('customer_password', True));	
		$data['customer_image'] 			= 'user.jpg';
		$data['customer_phone'] 	= $this->input->post('customer_phone', True);

		$this->db->insert('tbl_customers', $data);
	}

}
