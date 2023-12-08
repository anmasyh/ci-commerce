<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_products');
        $this->load->library('cart');
        
    }
    

    public function index()
    {
        $this->load->view('v_cart');
        
    }

    public function add()
    {
        $data = array(
            'id'      => $this->input->post('id'),
            'qty'     => $this->input->post('qty'),
            'price'   => $this->input->post('price'),
            'name'    => $this->input->post('name'),
            'gambar' => $this->input->post('gambar'),
            'stok' => $this->input->post('stok'),
    );
    $this->cart->insert($data);
    
    redirect('cart');
    
    }

    public function delete($rowid)
    {
        $this->cart->remove($rowid);
        
        redirect('cart');
        
    }

    public function update()
    {
        $data = array(
            'rowid' => 'b99ccdf16028f015540f341130b6d8ec',
            'qty'   => 3
    );
    
    $this->cart->update($data);
    }

    public function payment()
    {
        $this->load->view('v_payment');
        
    }
}