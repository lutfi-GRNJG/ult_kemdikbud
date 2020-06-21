<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan_pengaduan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Layanan_pengaduan_model');
    }

    public function index()
    {
        $tampil = array(
            'data_laporan' => $this->Layanan_pengaduan_model->tampil_laporan()
        );
        $this->load->view('templates/header'); // header
        $this->load->view('templates/nav'); // navigasi
        $this->load->view('admin/layanan_pengaduan', $tampil); // konten
        $this->load->view('templates/footer'); // footer js

    }

    public function detail_laporan()
    {
        $id = $this->uri->segment('3');

        $tampil = array(
            'detail_laporan' => $this->Layanan_pengaduan_model->detail_laporan($id),
        );
        $this->load->view('templates/header'); // header
        $this->load->view('templates/nav'); // navigasi
        $this->load->view('admin/detail_laporan', $tampil); // konten
        $this->load->view('templates/footer'); // footer js
    }
    public function ubah_status()
    {
        $id_laporan = $this->uri->segment('3');
        $this->db->set('status_laporan', 'ditanggapi');
        $this->db->where('id_laporan', $id_laporan);
        $this->db->update('laporan');
        redirect('Layanan_pengaduan');
    }
}

/* End of file Layanan_Pengaduan.php */
/* Location: ./application/controllers/Layanan_Pengaduan.php */