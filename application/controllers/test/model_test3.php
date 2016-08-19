<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
  モデルクラス経由でデータベースにアクセスする
 */

class Model_Test3 extends CI_Controller {
  function __construct()
  {
      // Model クラスのコンストラクタを呼び出す
      parent::__construct();
  }

  /**
    Modelクラスのqueryメソッドを呼ぶ
   */
  public function query_test1()
  {
    $this->load->model('TestDBModel', 'testdb', TRUE);
    $result = $this->testdb->query_select();
    if ($result) {
      return $result;
    }
    return array();
  }

  /*
   MODELクラスのInsert文を実行
   */
  public function query_test2()
  {
    $this->load->model('TestDBModel', 'testdb', TRUE);
    $result = $this->testdb->query_insert();
    return $result;
  }


	public function index()
	{
		// モデルからデータを取得する
    //$result = $this->query_test1();
    $this->query_test2();
    
		$data['message'] = 'This is model test!!!';
		$data['title'] = "Test Model 3";
    if (!isset($result)) {
      $result = array();
    }
    $data['result'] = $result;
 		$this->load->view('model_test3_view', $data);
	}
}
