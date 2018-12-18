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
		$data['title'] = " Akt-shop Dashboard";
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
		$data['title'] = "Add Categorie";
		$data['admin_main_content'] = $this->load->view('admin/pages/add_category','',true);
		$this->load->view('admin/admin_master',$data );
	}


	public function save_categorie()
	{
		$data=array();
		$data['category_name']			= $this->input->post('category_name',true);
		$data['category_description']	= $this->input->post('category_description',true);
		$data['publication_status']		= $this->input->post('publication_status',true);
		$this->db->insert('tbl_category',$data);
	}





	public function manage_categories()
	{
		$data = array();
		$data['title'] = "Manage Categories";
		$data['admin_main_content'] = $this->load->view('admin/pages/manage_categories','',true);
		$this->load->view('admin/admin_master',$data );
	}



}
