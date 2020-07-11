<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Permohonan_informasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Permohonan_informasi_model');
    }

    public function index()
    {
        $tampil = array(
            'data_permohonan_informasi' => $this->Permohonan_informasi_model->tampil_permohonan()
        );
        $this->load->view('templates/header'); // header
        $this->load->view('templates/nav'); // navigasi
        $this->load->view('admin/permohonan informasi/tampil_informasi', $tampil); // konten
        $this->load->view('templates/footer'); // footer js
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

    public function send_email()
    {
        $from_email = "";
        $to_email = $this->input->post('email');

        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => $from_email,
            'smtp_pass' => '',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->from($from_email, 'Kementrian Pendidikan dan Kebudayaan');
        $this->email->to($to_email);
        $this->email->subject('Tanggapan Permohonan Informasi Kemdikbud');
        $this->email->message('Permohonan informasi Anda sudah ditanggapi dan sedang ditangani oleh pihak terkait. Nantikan informasi selanjutnya. Terima kasih');

        $this->email->send();
        redirect('Permohonan_informasi');
    }
}
