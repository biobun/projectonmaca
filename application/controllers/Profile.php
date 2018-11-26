<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
    	parent::__construct();
    	$this->load->helper('url');

	}
	public function view($page = 'profile')
	{
		if (! file_exists(APPPATH.'views/pages/'.$page.'.php')) {
				show_404();
		}

		$data['title'] = ucfirst($page);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
}