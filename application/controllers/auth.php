<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
	{
        $data['title'] = "Login Page";

        $this->form_validation->set_rules('name', 'Name', 'required|trim');

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email has been registered'
        ]);

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
			'matches' => 'Password does not match',
			'min_length' => 'Password harus lebih dari 6 karakter'
		]);

		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header');
            $this->load->view('auth/register', $data);
            $this->load->view('template/footer');
        } else {
            $data = [

                'name'			=> htmlspecialchars($this->input->post('name')),
				'email'			=> htmlspecialchars($this->input->post('email')),
				'password'		=> password_hash($this->input->post('password1'), PASSWORD_DEFAULT),

            ];

			$this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulations, your account has been registered. Please Login!</div>');
            redirect('auth/login');
        }
		
	}

	public function login()
	{
        $data['title'] = "Login Page";

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header');
		    $this->load->view('auth/login', $data);
		    $this->load->view('template/footer');
        } else {
            $this->_login();
        }
	}

    private function _login()
    {
        $email = $this->input->post('email');
		$password = $this->input->post('password');
		// Query ke database
        // mencari email dan pilih dari tabel user
		$user = $this->db->get_where('user', ['email' => $email])->row_array();

        // jika usernya ada 
        if ($user) {
            // cek passwordnya
            if (password_verify($password, $user['password'])) {
                // jika paswordnya benar
                $data = [
                    'email' => $user['email']
                ];
                // simpan data kedalam session
					$this->session->set_userdata($data);
                    redirect('user');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
				redirect('auth/login');
            }
        } else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar!</div>');
			redirect('auth/login');
        }
    }
}
