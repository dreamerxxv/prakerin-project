<?php

class Dashboard extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '2'
        ){
            $this->session->set_flashdata('pesan','<div class="alert alert-info" role="alert">
            Login Terlebih Dahulu
          </div>');
            redirect('auth/login');
        }
    }

    public function index(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard');
        $this->load->view('templates/footer');
    }
}
?>