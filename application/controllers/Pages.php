<?php
	class Pages extends CI_Controller{
		public function view($page = 'acasa'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			if($page == 'acasa'){
				$data['post'] = $this->post_model->get_latest_post();
			}
			
			$data['title'] = ucfirst($page);

			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}

		public function about($page = 'revista'){
			if(!file_exists(APPPATH.'views/pages/about/'.$page.'.php')){
				show_404();
			}

			$data['title'] = 'Despre '.ucfirst($page);

			$this->load->view('templates/header');
			$this->load->view('pages/about/'.$page, $data);
			$this->load->view('templates/footer');
		}
	}