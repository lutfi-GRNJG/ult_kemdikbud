<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Permohonan_informasi extends CI_Controller
{
    public function index()
    {
        $this->load->view('pengaduan/form_pengaduan.php');
    }
}
