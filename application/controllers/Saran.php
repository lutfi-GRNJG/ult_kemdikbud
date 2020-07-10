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
                'email_pemohon' => $this->input->post('email'),
                'nama_pemohon' => $this->input->post('nama'),
                'no_HP_pemohon' => $this->input->post('telp'),
                'no_KTP_pemohon' => $this->input->post('ktp'),
                'alamat_pemohon' => $this->input->post('alamat'),
                'kecamatan_pemohon' => $this->input->post('kecamatan'),
                'kabupaten_pemohon' => $this->input->post('kabupaten'),
                'provinsi_pemohon' => $this->input->post('provinsi'),
                'profesi_pemohon' => $this->input->post('profesi'),
                'judul_saran' => $this->input->post('judul'),
                'redaksi_saran' => $this->input->post('saran'),
            ];

        $this->db->insert('saran', $data);
        redirect('Home');
    }
}
