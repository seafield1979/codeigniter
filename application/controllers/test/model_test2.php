<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelTest1 extends CI_Controller {
	public function index()
	{
    // config/database.php の情報をもとにデータベースを読み込む
    $this->load->database();

		// モデルからデータを取得する
    $query = $this->db->query('SELECT name, birthday, comment FROM users');
    // foreach ($query->result() as $row)
    // {

    // }


		$data['message'] = 'This is test!!!';
		$data['title'] = "Test1";
    $data['result'] = $query;
		$this->load->view('model_test1', $data);
	}
}
