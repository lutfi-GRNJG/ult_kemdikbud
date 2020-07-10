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

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if ($password == $user["password"]) {
                $data =
                    [
                        'id_user' => $user['id_user'],
                        'user_role' => $user['user_role'],
                        'username' => $user['username']
                    ];

                $this->session->set_userdata($data);
                redirect('Dashboard');
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
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('user_role');

        redirect('login');
    }
}
