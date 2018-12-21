<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

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
        $data['title'] = "index";
		$this->load->view('frontend/index', $data);
	}
}
