<?php
	class Users extends CI_Controller{
		// Register user
		public function register(){
			//Check admin login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
			} else {
				// Encrypt password
				$enc_password = hash('sha256', base64_encode(hash('sha512', $this->input->post('password'))));

				$this->user_model->register($enc_password);

				// Set message
				$this->session->set_tempdata('user_registered', 'You are now registered and ready to log in!', 5);

				redirect('posts');
			}
		}

		// Log in user
		public function login(){
			$data['title'] = 'Sign In';
			//Default admin user:
			//admin_revista
			//Revista2k20CNMV

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
			} else {
				
				// Get username
				$username = $this->input->post('username');
				// Get and encrypt the password
				$password = hash('sha256', base64_encode(hash('sha512', $this->input->post('password'))));

				// Login user
				$user_salt = $this->user_model->login($username, $password);

				if($user_salt){
					// Create session
					$user_data = array(
						'user_salt' => $user_salt,
						'username' => $username,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					// Set message
					$this->session->set_tempdata('user_loggedin', 'You are now logged in', 5);

					redirect('posts');
				} else {
					// Set message
					$this->session->set_tempdata('login_failed', 'Invalid credentials provided', 5);

					redirect('users/login');
				}		
			}
		}

		// Log user out
		public function logout(){
			if($this->session->userdata('logged_in')){
				// Unset user data
				$this->session->unset_userdata('logged_in');
				$this->session->unset_userdata('user_salt');
				$this->session->unset_userdata('username');

				// Set message
				$this->session->set_tempdata('user_loggedout', 'You are now logged out', 5);

				redirect('users/login');
			} else {
				$this->session->set_tempdata('user_loggedout', 'You aren\'t logged in', 5);

				redirect('posts');
			}
		}

		// Check if username exists
		public function check_username_exists($username){
			$this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
			if($this->user_model->check_username_exists($username)){
				return true;
			} else {
				return false;
			}
		}

		// Check if email exists
		public function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one');
			if($this->user_model->check_email_exists($email)){
				return true;
			} else {
				return false;
			}
		}
	}