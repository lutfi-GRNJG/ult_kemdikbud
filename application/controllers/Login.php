<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('login/index');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {

        $password = $this->input->post('password');
        $username = $this->input->post('username');

        $user = $this->db->get_where('customer', ['username' => $username])->row_array();

        if ($user) {
            if ($password == $user["password"]) {
                $data =
                    [
                        'id' => $user['id_customer'],
                        'nama_lengkap' => $user['nama_customer'],
                        'nomor_rumah' => $user['nomor_rumah'],
                        'alamat_rumah' => $user['alamat_rumah'],
                        'no_telp' => $user['no_telp'],
                        'username' => $user['username'],
                        'role_id' => $user['role_id'],
                        'user_id' => $user['id_customer']
                    ];

                $this->session->set_userdata($data);
                redirect('Customer');
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert">password salah</div>'
                );
                redirect('login');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">Akun tidak terdaftar</div>'
            );
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('user_id');

        redirect('login');
    }
}
