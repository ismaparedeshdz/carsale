<?php

class Autos extends CI_Controller {


	public function ver($page='inicio')
	{
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['title']=ucfirst($page);
		$this->load->view('template/header');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('template/footer');

	}
	public function insertar()
	{
		$this->load->view('welcome_message');
	}
}