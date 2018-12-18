<?php
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
