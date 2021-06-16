<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_auth');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        $this->form_validation->set_message('required', 'harap masukkan %s');

        $data['_title'] = "Login";

        if ($this->form_validation->run() == false) {
            $this->template->display_theme('pages/V_login', $data);
        } else {
            $this->template->display_theme('pages/V_login', $data);
            $this->_login();
        }
    }

    function _login()
    {
        $username = htmlspecialchars($this->input->post('username'));
        $password = md5($this->input->post('password'));

        $set = array(
            'last_login' => date("Y-m-d H:i:s")
        );

        $where = array(
            'username' => $username,
        );

        $check = $this->m_auth->login_check($where);

        if ($check) {
            if ($password == $check['password']) {
                $update = $this->App->update('login', $set, $where);

                $data = array(
                    'auth' => true,
                    'id' => $check['id'],
                    'username' => $check['username']
                );

                $this->session->set_flashdata('login_message', 'success|Anda sudah login! silahkan kembali ke <a href="' . base_url('dashboard') . '">Dashboard</a>');
                $this->session->set_userdata($data);
                redirect(base_url('dashboard'));
            }
        } else {
            $this->session->set_flashdata('login_message', 'danger|Username atau password salah!');
            redirect(base_url('auth/login'));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();

        redirect(base_url('auth/login'));
    }

    // function update()
    // {
    //     $where['id'] = $this->session->userdata('id');
    //     $data['username'] = htmlspecialchars($this->input->post('username'));
    //     $data['password'] = md5($this->input->post('password'));
    //     $passconf = md5($this->input->post('passconf'));

    //     if ($data['password'] == $passconf) {
    //         if ($this->App->update('login', $data, $where)) {
    //             $this->session->set_flashdata('alert', 'success|Username dan Password telah diupdate, silahkan logout');
    //             redirect(base_url('dashboard'));
    //         } else {
    //             $this->session->set_flashdata('alert', 'error|Gagal mengupdate data');
    //             redirect(base_url('dashboard'));
    //         }
    //     } else {
    //         $this->session->set_flashdata('alert', 'error|Gagal mengupdate data');
    //         redirect(base_url('dashboard'));
    //     }
    // }
}
