<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota2422500005_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        is_admin_logged_in();
        $this->load->model('Kota2422500005_model');
    }

    public function index() {
        $data['list_kota'] = $this->Kota2422500005_model->get_all();
        $this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/kota2422500005/index', $data);
        $this->load->view('administrator/templates/footer');
    }

    public function tambah_kota() {
        $data['title'] = 'Tambah Kota';
        $this->form_validation->set_rules('nama_kota005', 'Nama Kota', 'required');
        $this->form_validation->set_rules('jenis_kota005', 'Jenis Kota', 'required');
        $this->form_validation->set_rules('provinsi005', 'Provinsi', 'required');
        $this->form_validation->set_rules('status005', 'Status', 'required');
        
        if ($this->form_validation->run() !== FALSE) {
            $this->__simpan_kota();
        } 
        else {
            $this->load->view('administrator/templates/header', $data);
            $this->load->view('administrator/templates/sidebar');
            $this->load->view('administrator/kota2422500005/tambah_kota', $data);
            $this->load->view('administrator/templates/footer');
        }
    }

    private function __simpan_kota() {
        $data = [
            'nama_kota005'  => $this->input->post('nama_kota005'),
            'jenis_kota005' => $this->input->post('jenis_kota005'),
            'provinsi005'   => $this->input->post('provinsi005'),
            'status005'     => $this->input->post('status005')
        ];
        
        $this->Kota2422500005_model->tambah($data);
        
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show">Berhasil menambah data!<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');
        redirect('administrator/kota2422500005'); 
    }

    public function ubah_kota($id) {
        $data['title'] = 'Ubah Kota';
        $data['item'] = $this->Kota2422500005_model->get_by_id($id); 
        
        if ($data['item']) {
            $this->form_validation->set_rules('nama_kota005', 'Nama Kota', 'required');
            $this->form_validation->set_rules('jenis_kota005', 'Jenis Kota', 'required');
            $this->form_validation->set_rules('provinsi005', 'Provinsi', 'required');
            $this->form_validation->set_rules('status005', 'Status', 'required');
            
            if ($this->form_validation->run() !== FALSE) {
                $this->__ubah_kota($id);
            } else {
                $this->load->view('administrator/templates/header', $data);
                $this->load->view('administrator/templates/sidebar');
                $this->load->view('administrator/kota2422500005/ubah_kota', $data);
                $this->load->view('administrator/templates/footer');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data tidak ditemukan!</div>');
            redirect('administrator/kota2422500005');
        }
    }

    private function __ubah_kota($id) {
        $data = [
            'nama_kota005'  => $this->input->post('nama_kota005'),
            'jenis_kota005' => $this->input->post('jenis_kota005'),
            'provinsi005'   => $this->input->post('provinsi005'),
            'status005'     => $this->input->post('status005')
        ];
        
        $this->Kota2422500005_model->ubah($data, $id);
        
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show">Berhasil mengubah data!<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');
        redirect('administrator/kota2422500005');
    }

    public function hapus_kota($id) {
        $item = $this->Kota2422500005_model->get_by_id($id);
        if ($item) {
            $this->Kota2422500005_model->hapus($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show">Berhasil menghapus data!<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data tidak ditemukan!</div>');
        }
        redirect('administrator/kota2422500005');
    }
}