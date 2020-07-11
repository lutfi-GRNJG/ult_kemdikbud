<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prosedur_informasi extends CI_Controller
{
    public function index()
    {
        $this->load->view('prosedur/prosedur_informasi');
    }
}
