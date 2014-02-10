<?php
	class Projects extends CI_Controller
	{
		public function index()
		{
			$this->load->view('Templates/header');
			$this->load->view('projects');
			$this->load->view('Templates/footer');
		}
	}
?>