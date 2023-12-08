<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function __construct()
        {
            parent::__construct();
            $this->load->model('m_products');
            $this->load->model('m_home');
        }

    public function index()
    {   
        $data = array(
            'title' => 'Products',
            'produk' =>$this->m_products->get_all_data(),
            'isi' => 'v_products',
        );
        $this->load->view('v_products', $data, FALSE);
    }

    public function product_details($id_produk)
    {   
        $data = array(
            'title' => 'Product Details',
            'produk' => $this->m_products->product_details($id_produk),
            'isi' => 'v_product_details',
        );
        $this->load->view('v_product_details', $data, FALSE);
    }

}

/* End of file Home.php */
