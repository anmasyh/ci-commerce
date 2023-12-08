<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
        $this->load->model('m_products');
        
    }
    

    public function index()
    {   
        $data = array(
            'title' => 'Home',
            'produk' =>$this->m_products->get_all_data(),
            'isi' => 'v_home',
        );
        $this->load->view('v_home', $data, FALSE);
    }

    public function category($id_kategori)
    {   
        $kategori = $this->m_home->category($id_kategori);
        $data = array(
            'title' => 'Category : ' . $kategori->nama_kategori,
            'produk' => $this->m_home->get_all_data_products($id_kategori),
        );
        $this->load->view('v_category', $data, FALSE);
    }

}

/* End of file Home.php */
