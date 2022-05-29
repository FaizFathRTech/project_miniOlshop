<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
    }
    public function index()
    { 
        $data['tittle'] = 'WoodSofa | Home';
        $this->load->view('template/header', $data);
        $this->load->view('home/page-section-1');
        $this->load->view('home/page-section-2');
        $this->load->view('home/page-section-5');
        $this->load->view('template/footer');
    }
}