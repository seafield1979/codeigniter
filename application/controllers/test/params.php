<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Params extends CI_Controller {
	// 引数あり
	public function param_func($hoge=NULL, $hoge2=NULL)
	{
		$data['message'] = "This is test [$hoge] [$hoge2]!!!";
		$data['title'] = "Params [$hoge] [$hoge2]";
		$this->load->view('params', $data);
	}

	public function index()
	{
		$data['message'] = "This is test!!!";
		$data['title'] = "Params";
		$this->load->view('params', $data);
	}
}
