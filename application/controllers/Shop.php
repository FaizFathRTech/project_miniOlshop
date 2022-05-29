<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
    }
    public function index()
    {
        $data['products']=$this->Product_model->getProductData();
        $data['tittle'] = 'Home | Shop';
        $this->load->view('template/header', $data);
        $this->load->view('home/page-section-4');
        $this->load->view('template/footer');
    }
}