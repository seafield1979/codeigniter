<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_Func extends CI_Controller {
	public function index()
	{
		// エラーメッセージ
		log_message('error', "エラー発生！");

		$data['message'] = 'This is Common Func!!!';
		$data['title'] = "Common Func";
		$this->load->view('common_func', $data);
	}
}
