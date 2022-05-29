<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller{
    public function index()
    {
        $data['tittle'] = 'Home | Category';
        $this->load->view('template/header', $data);
        $this->load->view('home/page-section-3');
        $this->load->view('template/footer');
    }
}