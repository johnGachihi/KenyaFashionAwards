<?php 
	
class Pages extends CI_Controller{
		public function view($page='home'){

			$this->load->view('templates/header');
			$this->load->view('pages/home');
			$this->load->view('templates/footer');
		}
	
}
