<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function index()
	{

		$this->load->view('templates/header'); // header
        $this->load->view('templates/nav'); // navigasi
        $this->load->view('admin/dashboard'); // konten
        $this->load->view('templates/footer'); // footer js
		
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */