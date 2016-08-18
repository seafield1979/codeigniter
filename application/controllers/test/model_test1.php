<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Test1 extends CI_Controller {
	public function index()
	{
    // モデルからデータを取得する
    $this->load->model('Test1Model', 'user', TRUE);
    if ($name = $this->user->getNameJa('taro')) {
      $data['name'] = $name;
    }
    if ($names = $this->user->getNames()) {
      $data['names'] = $names;
    }
    
		$data['message'] = 'This is ModelTest1!!!';
		$data['title'] = "ModelTest1";
    $this->load->view('model_test1', $data);
	}
}
