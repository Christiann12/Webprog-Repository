<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index($page = 'loginpage', $status = 'false')
	{	
		$data['page'] = $page;
		if( $page == 'loginpage' && $status == 'false'){
			$this->load->helper('url');
			$this->load->view('adminpages/pages/'. $page);
		}
		else if ($page != 'loginpage' && $status == 'true'){
			$this->load->helper('url');
			$this->load->view('adminpages/adminheaderfooter/adminheader');
			$this->load->view('adminpages/pages/wrapper',$data);
			$this->load->view('adminpages/adminheaderfooter/adminfooter');
		}
		else{
			show_404();
		}
	}
}

