<?php 

    class Dashboard extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Users_model');
            $this->load->model('Product_model');
        }
        
        public function index()
        {
            $data['users'] = $this->Users_model->countUser();
            $data['products'] = $this->Product_model->countProduct();
            $this->load->view('dashboard/component/header');
            $this->load->view('dashboard/component/sideBar');
            $this->load->view('dashboard/component/topBar');
            $this->load->view('dashboard/index', $data);
            $this->load->view('dashboard/component/footer');
        }

        public function userDataTable()
        {
            $data['usersData'] = $this->Users_model->getAllUsersData();
            $this->load->view('dashboard/component/header');
            $this->load->view('dashboard/component/sideBar');
            $this->load->view('dashboard/component/topBar');
            $this->load->view('dashboard/usersTable', $data);
            $this->load->view('dashboard/component/footer');
        }

        public function getUserByID()
        {   
            $id = $this->input->post();
            echo json_encode( $this->Users_model->getUserByID($id) );
        }
    }