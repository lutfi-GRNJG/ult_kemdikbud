<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Permohonan_informasi extends CI_Controller
{
    public function index()
    {
        $this->load->view('permohonan informasi/form_informasi.php');
    }

    public function tambah_permohonan_informasi()
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
                'rincian' => $this->input->post('rincian'),
                'tujuan' => $this->input->post('tujuan'),
            ];

        $this->db->insert('', $data);
        redirect('Home');
    }
}
