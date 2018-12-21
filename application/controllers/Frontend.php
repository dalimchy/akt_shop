<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
    }


	public function index()
	{
		$data = array();
        $data['title'] = "index";
        $data['all_category_info'] = $this->admin_model->all_category_info();
        $data['frondend_main_content'] = $this->load->view('frontend/pages/home',$data,true);
		$this->load->view('frontend/index', $data);
	}
}
