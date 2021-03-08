<?php
	class Home extends CI_Controller{
		public function index(){
			if($this->session->userdata('logged_in') != true){
				redirect('users/login');
			}
			$this->load->view('templates/header');
			$this->load->view('home');
			$this->load->view('templates/footer');
		}
	}