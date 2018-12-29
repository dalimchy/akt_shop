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
        $data['all_product_info'] = $this->admin_model->all_product_info();
        $data['all_manufacture_info'] = $this->admin_model->all_manufacture_info();
        $data['frondend_main_content'] = $this->load->view('frontend/pages/home',$data,true);
		$this->load->view('frontend/index', $data);
	}

	public function product_details($product_id)
	{
		$data = array();
        $data['title'] = "product view";
        $data['all_category_info'] = $this->admin_model->all_category_info();
		$data['all_product_info'] = $this->admin_model->all_product_info();
		$data['all_manufacture_info'] = $this->admin_model->all_manufacture_info();
		$data['product_details'] = $this->admin_model->product_details($product_id);
        $data['frondend_main_content'] = $this->load->view('frontend/pages/product_details',$data,true);
		$this->load->view('frontend/index', $data);
	}

	public function manufacture_view($manufacture_id)
	{
		$data = array();
        $data['title'] = "manufacture_view";
        $data['manufacture_view_id'] = $manufacture_id;
        $data['all_category_info'] = $this->admin_model->all_category_info();
		$data['all_product_info'] = $this->admin_model->all_product_info();
		$data['all_manufacture_info'] = $this->admin_model->all_manufacture_info();
        $data['frondend_main_content'] = $this->load->view('frontend/pages/manufacture_view',$data,true);
		$this->load->view('frontend/index', $data);
	}
	public function category_view($category_id)
	{
		$data = array();
        $data['title'] = "category_view";
        $data['category_view_id'] = $category_id;
        $data['all_category_info'] = $this->admin_model->all_category_info();
		$data['all_product_info'] = $this->admin_model->all_product_info();
		$data['all_manufacture_info'] = $this->admin_model->all_manufacture_info();
        $data['frondend_main_content'] = $this->load->view('frontend/pages/category_view',$data,true);
		$this->load->view('frontend/index', $data);
	}
	public function shopping_cart()
	{
		$data = array();
        $data['title'] = "shopping_cart";
        $data['all_category_info'] = $this->admin_model->all_category_info();
		$data['all_product_info'] = $this->admin_model->all_product_info();
		$data['all_manufacture_info'] = $this->admin_model->all_manufacture_info();
        $data['frondend_main_content'] = $this->load->view('frontend/pages/cart',$data,true);
		$this->load->view('frontend/index', $data);
	}
}
