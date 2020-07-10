<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saran extends CI_Controller
{
    public function index()
    {
        $this->load->view('saran/form_saran.php');
    }

    public function tambah_saran()
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
                'saran' => $this->input->post('saran'),
            ];

        $this->db->insert('', $data);
        redirect('Home');
    }
}
