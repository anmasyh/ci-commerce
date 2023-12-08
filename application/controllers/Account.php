<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_account');
        
    }
    

    public function index()
    {
        $this->load->view('v_account');
    }
    public function register()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );
        $this->m_account->register($data);
        
        redirect('home');
        
    }

}