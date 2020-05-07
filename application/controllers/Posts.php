<?php
	class Posts extends CI_Controller{
		public function index(){
			$data['title'] = 'Latest posts';

			$data['posts'] = $this->Post_model->get_posts();

			$this->load->view('templates/header.php');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer.php');
		}

		public function view($slug = NULL){
			$data['post'] = $this->Post_model->get_posts($slug);

			if(empty($data['post'])){
				show_404();
			}

			$data['title'] = $data['post']['title'];

			$this->load->view('templates/header.php');
			$this->load->view('posts/view', $data);
			$this->load->view('templates/footer.php');
		}
	}