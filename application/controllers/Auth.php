<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{

	public function index()
	{
		if ($this->session->userdata('email')) {
			redirect('user');
			die;
		}

		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login - inventori IFSU';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} else {
			$this->_login();
		}
	}

	private function _login() 
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();
		// Jika Userya ada
		if ($user) 
		{
			// jika usernya aktif
			if ($user['active'] == 1) {
				// cek password
				if ($password == $user['password']) {
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1) {
						redirect('Admin');
					} else {
						redirect('User');
					}
				}
				else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong Password!</div>');
					redirect('Auth');
				}
			}
			else{
				$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Email is not Activated!</div>');
				redirect('Auth');
			}
		}
		else
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email is not Registered!</div>');
			redirect('Auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You just has been logged out!</div>');

		redirect(base_url());
	}

	public function blocked()
	{
		$data['title'] = 'Forbidden!';
		$this->load->view('templates/header', $data);
		$this->load->view('auth/blocked');
		$this->load->view('templates/auth_footer');
	}
}