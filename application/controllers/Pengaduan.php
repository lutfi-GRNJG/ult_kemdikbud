<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan extends CI_Controller
{
    // function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('Pengaduan_model');
    // }
    public function index()
    {
        $this->load->view('pengaduan/form_pengaduan.php');
    }

    public function tambah_pengaduan()
    {
        $data =
            [
                'alamat_email' => $this->input->post('email'),
                'nama_pelapor' => $this->input->post('nama'),
                'alamat_rumah' => $this->input->post('alamat'),
                'nomor_telepon' => $this->input->post('telp'),
                'nomor_ktp' => $this->input->post('ktp'),
                'profesi' => $this->input->post('profesi'),
                'provinsi' => $this->input->post('provinsi'),
                'kabupaten' => $this->input->post('kabupaten'),
                'kecamatan' => $this->input->post('kecamatan'),
                'judul_laporan' => $this->input->post('judul'),
                'redaksi_laporan' => $this->input->post('laporan'),
                'status_laporan' => "belum ditanggapi"
            ];

        $this->db->insert('laporan', $data);
        redirect('Home');
    }
}
