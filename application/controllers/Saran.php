<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saran extends CI_Controller
{
    public function index()
    {
        $this->load->view('pengaduan/form_pengaduan.php');
    }
}
