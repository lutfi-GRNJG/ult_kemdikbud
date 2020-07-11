<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prosedur_pengaduan extends CI_Controller
{
    public function index()
    {
        $this->load->view('prosedur/prosedur_pengaduan');
    }
}
