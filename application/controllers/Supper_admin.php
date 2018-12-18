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


}
