<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index($page = 'HomePage')
	{	
		$this->load->helper('url');
		$this->load->view('headerNfooter/header');
		$this->load->view('pages/'. $page);
		$this->load->view('headerNfooter/footer');
	}


}

