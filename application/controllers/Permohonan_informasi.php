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
                'email_pemohon' => $this->input->post('email'),
                'nama_pemohon' => $this->input->post('nama'),
                'no_HP_pemohon' => $this->input->post('telp'),
                'no_KTP_pemohon' => $this->input->post('ktp'),
                'alamat_pemohon' => $this->input->post('alamat'),
                'kecamatan_pemohon' => $this->input->post('kecamatan'),
                'kabupaten_pemohon' => $this->input->post('kabupaten'),
                'provinsi_pemohon' => $this->input->post('provinsi'),
                'profesi_pemohon' => $this->input->post('profesi'),
                'judul_informasi' => $this->input->post('judul'),
                'rincian_informasi' => $this->input->post('rincian'),
                'tujuan_informasi' => $this->input->post('tujuan'),
            ];

        $this->db->insert('permohonan', $data);
        redirect('Home');
    }
}
