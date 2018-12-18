<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$akt_user_id = $this->session->userdata('id');
		if ($akt_user_id != NULL) {
			redirect('/dashboard');
		}
		$this->load->model('admin_model');


	}


defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $akt_user_id = $this->session->userdata('id');
        if ($akt_user_id != null) {
            redirect('/dashboard');
        }

    }
	public function register()
	{
		$data = array();
		$data['title'] = " Akt-shop Register";
		$this->load->view('admin/register',$data);
	}

	public function save_register_user()
	{
		$this->form_validation->set_rules('username', 'User Name', 'required|max_length[255]');
		$this->form_validation->set_rules('email', 'Email Address', 'required|max_length[255]|is_unique[akt_users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|min_length[6]|matches[password]');

		if ($this->form_validation->run()) {
			$this->admin_model->register_new_admin();
			// $data = array();
			// $data['success_message'] = 'User Registration Sucessfully';
			// $data['admin_maincontent'] = $this->load->view('admin/register', $data,True);
			// $this->load->view('admin/pages/dashboard');
			redirect('/dashboard');
		}else{

			$data = array();
			$data['title'] = " Akt-shop Register";
			$this->load->view('admin/register',$data);
		}
	}

	





    public function login()
    {
        $data = array();
        $data['title'] = " Akt-shop Login";
        $this->load->view('admin/login', $data);
    }

    public function register()
    {

        $this->load->view('admin/register');
    }

    public function admin_login_check()
    {
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);

        $this->load->model('admin_model');
        $result = $this->admin_model->check_admin_info($email, $password);

        $sdata = array();
        if ($result) {
            $sdata['id'] = $result->id;
            $sdata['username'] = $result->username;
            $this->session->set_userdata($sdata);
            redirect('/dashboard');

        } else {
            $sdata['message'] = "Your User id Password Invalid";
            $this->session->set_userdata($sdata);
            redirect('/login');
        }

    }

    public function dashboard()
    {

        $this->load->view('admin/dashboard');
    }

}
