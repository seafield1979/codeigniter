<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Multi_View_Test extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');

		$data = array();
		$data['baseurl'] = base_url();
		$this->load->view('sample1/header', $data);
		$this->load->view('sample1/content', $data);
		$this->load->view('sample1/footer');
	}
}
