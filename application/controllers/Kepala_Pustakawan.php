<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kepala_Pustakawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_pustakawan');
    }
    public function index()
    {

        $this->load->view('Templates/header');
        $this->load->view('Templates/topbar');
        $this->load->view('Templates/sidebar');
        $this->load->view('Kepala_Pustakawan/admin');
        $this->load->view('Templates/footer');
    }
    public function list_pustakawan()
    {
        $data['list'] = $this->Model_pustakawan->list_pustakawan(1, 0);
        $data['id'] = $this->Model_pustakawan->get_id();

        $config['base_url'] = 'http://localhost:8080/perpustakaan/Kepala_Pustakawan/list_pustakawan';
        $config['total_rows'] = 200;
        $config['per_page'] = 5;

        $this->load->view('Templates/header');
        $this->load->view('Templates/topbar');
        $this->load->view('Templates/sidebar');
        $this->load->view('Kepala_Pustakawan/list_pustakawan', $data);
        $this->load->view('Templates/footer');
    }
    public function tambah()
    {
        $this->Model_pustakawan->insert_pustakawan();
        redirect('Kepala_Pustakawan/list_pustakawan');
    }
    public function ubah()
    {

        $this->Model_pustakawan->update_pustakawan();
        redirect('Kepala_Pustakawan/list_pustakawan');
    }
    public function hapus($id_pustakawan)
    {
        $this->Model_pustakawan->delete_pustakawan($id_pustakawan);

        redirect('Kepala_Pustakawan/list_pustakawan');
    }
}
