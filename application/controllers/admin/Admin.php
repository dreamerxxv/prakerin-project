<?php 

class Admin extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
           $this->session->set_flashdata('Can not be Reached');
           redirect('auth/login');
        }
    }

    public function index()
    {
        $data['data'] = $this->m_data->tampil_data();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data',$data);
        $this->load->view('templates_admin/footer');
    }

    public function detail($id){
        $this->load->model('m_data');
        $detail = $this->m_data->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_admin/header');
        $this->load->view('admin/detail',$data);
        $this->load->view('templates_admin/footer');
    }

    public function print_dt(){
        $data['print_dt'] = $this->m_data->printf();
        $this->load->view('templates_admin_ad/header');
        $this->load->view('admin/print',$data);
        $this->load->view('templates_admin/footer');
    }

}
?>