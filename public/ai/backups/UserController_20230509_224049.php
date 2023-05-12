<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function index()
    {
        $data['users'] = $this->UserModel->get_all_users();
        $this->load->view('user/index', $data);
    }

    public function create()
    {
        $this->load->view('user/create');
    }

    public function store()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/create');
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password_hash' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'phone_number' => $this->input->post('phone_number'),
                'currency_code' => $this->input->post('currency_code')
            );

            $this->UserModel->insert_user($data);
            redirect('user');
        }
    }

    public function edit($user_id)
    {
        $data['user'] = $this->UserModel->get_user_by_id($user_id);
        $this->load->view('user/edit', $data);
    }

    public function update($user_id)
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
        $this->form_validation->set_rules('currency_code', 'Currency Code', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['user'] = $this->UserModel->get_user_by_id($user_id);
            $this->load->view('user/edit', $data);
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'phone_number' => $this->input->post('phone_number'),
                'currency_code' => $this->input->post('currency_code')
            );

            $this->UserModel->update_user($user_id, $data);
            redirect('user');
        }
    }

    public function delete($user_id)
    {
        $this->UserModel->delete_user($user_id);
        redirect('user');
    }
}