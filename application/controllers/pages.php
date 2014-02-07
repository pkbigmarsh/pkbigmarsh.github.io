<?php
	class Pages extends CI_Controller
	{
		public function view($page = "home")
		{
			if(!file_exists('application/views/pages/'.$page'.php'))
			{
				show_404();
			}

			$data['title'] = ucfirst($page);

			$this->load->view("Templates/header.php", $data);
			$this->load->view($page, $data);
			$this->load->view("Templates/footer.php");
		}
	}
?>