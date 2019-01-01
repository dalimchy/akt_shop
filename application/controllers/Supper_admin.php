<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supper_admin extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$akt_user_id = $this->session->userdata('id');
		if ($akt_user_id == NULL ) {
			redirect('login');
		}
		$this->load->model('admin_model');
	}

	public function index()
	{
		$data = array();
		$data['title'] = "Dashboard";
		$data['admin_main_content'] = $this->load->view('admin/pages/dashboard','',true);
		$this->load->view('admin/admin_master',$data );
	}





	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('username');
		$sdata = array();
		$sdata['message'] = "You are sucessfully logout !";
		$this->session->set_userdata($sdata);
		redirect('/login');
	}



				/***********************************/
				/*     *****  Category  *****      */
				/***********************************/


	public function add_category()
	{
		$data = array();
		$data['title'] = "Add Category";
		$data['admin_main_content'] = $this->load->view('admin/pages/add_category','',true);
		$this->load->view('admin/admin_master',$data );
	}


	private function save_category_img(){
		$config['upload_path'] = 'upload/category/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 1000;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('category_image')) {
			$data = $this->upload->data();
			$image_path = $config['upload_path'].$data[file_name];
			return $image_path;
		}else{
			$error = $this->upload->display_errors();
			print_r($error);
		}
	}


	public function save_category()
	{

		$category_image = $this->save_category_img();
		$this->admin_model->save_category($category_image);
		$sdata = array();
		$sdata['message'] = "Save Category Information Sucessfully!";
		$this->session->set_userdata($sdata);
		redirect('add-category');

		
	}





	public function manage_categories()
	{
		$data = array();
		$data['title'] = "Manage Categories";
		$data['all_category_info'] = $this->admin_model->all_category_info();
		$data['admin_main_content'] = $this->load->view('admin/pages/manage_categories',$data,true);
		$this->load->view('admin/admin_master',$data );
	}



	public function unpublish_category($category_id)
	{
		$this->admin_model->unpublish_category($category_id);
		redirect('manage-categories');
	}

	public function publish_category($category_id)
	{
		$this->admin_model->publish_category($category_id);
		redirect('manage-categories');
	}


	public function edit_category($category_id)
	{
		$data = array();
		$data['title'] = "Edit Categories";
		$data['category_info'] = $this->admin_model->select_category_by_id($category_id);
		$data['admin_main_content'] = $this->load->view('admin/pages/edit_category',$data,true);
		$this->load->view('admin/admin_master',$data);
	}

	public function update_category()
	{

		if ($_FILES['category_image']['name'] == '' || $_FILES['category_image']['size'] == '0')
		{
  			$category_image = $this->input->post('category_old_image', True);
  			$this->admin_model->update_category_info($category_image);
  			$sdata = array();
  			$sdata['message'] = "Update category Information Sucessfully";
  			$this->session->set_userdata($sdata);
  			$category_id = $this->input->post('category_id', True);
  			redirect('manage-categories');
  		}else
  		{
  			$category_image = $this->save_category_img();
  			$this->admin_model->update_category_info($category_image);
  			unlink( $this->input->post('category_old_image', True));
  			$sdata = array();
  			$sdata['message'] = "Update category Information Sucessfully";
  			$this->session->set_userdata($sdata);
  			$category_id = $this->input->post('category_id', True);
  			redirect('manage-categories');
  		}

	}


	public function delete_category($category_id)
	{
		$this->admin_model->delete_category($category_id);
		$this->admin_model->delete_manufacturebyCate($category_id);
		$this->admin_model->delete_productbyCate($category_id);
		redirect('manage-categories');
	}


				/***********************************/
				/*  *****  Manufacturer  *****     */
				/***********************************/

	

	public function add_manufacture()
	{
		$data = array();
		$data['title'] = "Add Manufacture";
		$data['publish_category_info'] = $this->admin_model->select_all_publish_category_info();
		$data['admin_main_content'] = $this->load->view('admin/pages/add_manufacture',$data,true);
		$this->load->view('admin/admin_master',$data );
	}

	public function save_manufacture()
	{
		$manufacture_image = $this->save_manufacture_img();
		$this->admin_model->save_manufacture($manufacture_image);
		$sdata = array();
		$sdata['message'] = "Save Manufacture Information Sucessfully!";
		$this->session->set_userdata($sdata);
		redirect('add-manufacture');
	}

	private function save_manufacture_img()
	{
		$config['upload_path'] = 'upload/subcategory/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 1000;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('manufacture_image')) {
			$data = $this->upload->data();
			$image_path = $config['upload_path'].$data[file_name];
			return $image_path;
		}else{
			$error = $this->upload->display_errors();
			print_r($error);
		}
	}

	public function manage_manufacture()
	{
		$data = array();
		$data['title'] = "Manage Manufacture";
		$data['all_manufacture_info'] = $this->admin_model->all_manufacture_info();
		$data['admin_main_content'] = $this->load->view('admin/pages/manage_manufacture',$data,true);
		$this->load->view('admin/admin_master',$data );
	}

	public function unpublish_manufacture($manufacture_id)
	{
		$this->admin_model->unpublish_manufacture($manufacture_id);
		redirect('manage-manufacture');
	}

	public function publish_manufacture($manufacture_id)
	{
		$this->admin_model->publish_manufacture($manufacture_id);
		redirect('manage-manufacture');
	}



	public function edit_manufacture($manufacture_id)
	{
		$data = array();
		$data['title'] = "Edit Manufacture";
		$data['publish_category_info'] = $this->admin_model->select_all_publish_category_info();
		$data['select_manufacture_by_id'] = $this->admin_model->select_manufacture_by_id($manufacture_id);
		$data['admin_main_content'] = $this->load->view('admin/pages/edit_manufacture',$data,true);
		$this->load->view('admin/admin_master',$data);
	}

	public function update_manufacture()
	{

		if ($_FILES['manufacture_image']['name'] == '' || $_FILES['manufacture_image']['size'] == '0') {

  			$manufacture_image = $this->input->post('manufacture_old_image', True);
  			$this->admin_model->update_manufacture_info($manufacture_image);
  			$sdata = array();
  			$sdata['message'] = "Update Manufacture Information Sucessfully";
  			$this->session->set_userdata($sdata);
  			$manufacture_id = $this->input->post('manufacture_id', True);
  			redirect('manage-manufacture');
  		}else
  		{

  			$manufacture_image = $this->save_manufacture_img();
  			$this->admin_model->update_manufacture_info($manufacture_image);
  			unlink( $this->input->post('manufacture_old_image', True));
  			$sdata = array();
  			$sdata['message'] = "Update Manufacture Information Sucessfully";
  			$this->session->set_userdata($sdata);
  			$manufacture_id = $this->input->post('manufacture_id', True);
  			redirect('manage-manufacture');
  		}


	}

	public function delete_manufacture($manufacture_id)
	{
		$this->admin_model->delete_manufacture($manufacture_id);
		$this->admin_model->delete_productbyManu($manufacture_id);
		redirect('manage-manufacture');
	}

	public function getSubCateBy_category()
	{
		if($this->input->post('category_id'))
		{
			echo $this->admin_model->getSubCateBy_category($this->input->post('category_id'));
		}
	}

				/***********************************/
				/*  *****  		Product  *****     */
				/***********************************/



	public function add_product()
	{
		$data = array();
		$data['title'] = "Add Product";
		$data['publish_category_info'] = $this->admin_model->select_all_publish_category_info();
		$data['publish_brand_info'] = $this->admin_model->get_all_brands();
		$data['publish_manufacture_info'] = $this->admin_model->select_all_publish_manufacture_info();
		$data['admin_main_content'] = $this->load->view('admin/pages/add_product',$data,true);
		$this->load->view('admin/admin_master',$data );
	}


	public function save_product()
	{
	$this->admin_model->save_product_info();
	$sdata = array();
	$sdata['message'] = "Save Product Information Sucessfully!";
	$this->session->set_userdata($sdata);
	redirect('add-product');
	}

	public function manage_product()
	{
		$data = array();
		$data['title'] = "Manage Product";
		$data['all_product_info'] = $this->admin_model->all_product_info();
		$data['admin_main_content'] = $this->load->view('admin/pages/manage_product',$data,true);
		$this->load->view('admin/admin_master',$data );
	}

	public function unpublish_product($product_id)
	{
		$this->admin_model->unpublish_product($product_id);
		$sdata = array();
		$sdata['message'] = "Save unpublish Product Sucessfully!";
		$this->session->set_userdata($sdata);
		redirect('manage-product');
	}

	public function publish_product($product_id)
	{

		$this->admin_model->publish_product($product_id);
		$sdata = array();
		$sdata['message'] = "Save publish Product Sucessfully!";
		$this->session->set_userdata($sdata);
		redirect('manage-product');
	}

	public function delete_product($product_id)
	{
		$sdata = array();
		$sdata['message'] = "Delete  Product Sucessfully!";
		$this->session->set_userdata($sdata);
		$this->admin_model->delete_product($product_id);
		redirect('manage-product');
	}

	public function edit_product($product_id)
	{
		$data = array();
		$data['title'] = "Edit Product";
		$data['publish_category_info'] = $this->admin_model->select_all_publish_category_info();
		$data['publish_manufacture_info'] = $this->admin_model->select_all_publish_manufacture_info();
		$data['product_info'] = $this->admin_model->product_info_by_id($product_id);
		$data['admin_main_content'] = $this->load->view('admin/pages/edit_product',$data,true);
		$this->load->view('admin/admin_master',$data);
	}

	public function update_product()
	{
		if ($_FILES['product_image']['name'] == '' || $_FILES['product_image']['size'] == '0') {

  			$product_image = $this->input->post('product_old_image', True);
  			$this->admin_model->update_product($product_image);
  			$sdata = array();
  			$sdata['message'] = "Update product Information Sucessfully";
  			$this->session->set_userdata($sdata);
  			$product_id = $this->input->post('product_id', True);
  			redirect('manage-product');
  		}else {
  			$product_image = $this->upload_product_img();
  			$this->admin_model->update_product($product_image);
  			unlink( $this->input->post('product_old_image', True));
  			$sdata = array();
  			$sdata['message'] = "Update product Information Sucessfully";
  			$this->session->set_userdata($sdata);
  			$product_id = $this->input->post('product_id', True);
  			redirect('manage-product');
  		}
	}

					/***********************************/
					/*  *****      Brand     *****     */
					/***********************************/

	public function add_brand()
	{
		$data = array();
		$data["title"] = "Brands";
		$data['brand_info_list'] = $this->admin_model->get_all_brands();
		$data["admin_main_content"] = $this->load->view('admin/pages/brand', $data, true);
		$this->load->view('admin/admin_master', $data);
	}

	public function save_brand()
	{
		$this->admin_model->brand_info();
		$data = array();
		$data['message'] = "Save Brand Sucessfully!";
		$this->session->set_userdata($data);
		redirect('brands');
	}

	public function delete_brand($brand_id)
	{
		$this->admin_model->delete_brand($brand_id);
		$this->admin_model->delete_productBy_brand($brand_id);
		redirect('brands');
	}


}
