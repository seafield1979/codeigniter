<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
  Active Record
  モデルクラスを使用しないでデータベースにアクセスする方法
 */

class Model_Test2 extends CI_Controller {
  function __construct()
  {
      // Model クラスのコンストラクタを呼び出す
      parent::__construct();

      // config/database.php の情報をもとにデータベースを読み込む
      $this->load->database();
  }
  /*
    レコードを追加する
   */
  public function add_record()
  {
    $insert_data = array(
      'name' => 'shutaro',
       'birthday' => '1979-09-28',
       'comment' => 'hoge');
    $this->db->insert('users', $insert_data);

    $data['message'] = 'Insert ' . print_r($insert_data);
    $data['title'] = "Test1";
    $data['result'] = array();
    $this->load->view('model_test2', $data);
  }

  /*
    テーブルの全レコードを取得する
   */
  public function get_records()
  {
    $query = $this->db->get('users');
    $result = array();
    foreach ($query->result() as $row)
    {
      $result[] = array($row->name, $row->birthday, $row->comment);
    }
    return $result;
  }
  
  /*
    テーブルのレコードを取得する(WHERE)
   */
  public function get_records_where()
  {
    $query = $this->db->get_where('users', array('name'=>'add 123'));
    $result = array();
    foreach ($query->result() as $row)
    {
      $result[] = array($row->name, $row->birthday, $row->comment);
    }

    return $result;
  }

  /*
    like
    getの条件を追加する。
  */
  public function get_records_like()
  {
    $this->db->like('name', 'add');   // WHERE name LIKE '%add%' と同じ効果
    $query = $this->db->get('users');
    $result = array();
    foreach ($query->result() as $row)
    {
      $result[] = array($row->name, $row->birthday, $row->comment);
    }

    return $result;
  }

	public function index()
	{
		// モデルからデータを取得する
    $result = $this->get_records_like();
    
		$data['message'] = 'This is test!!!';
		$data['title'] = "Test1";
    $data['result'] = $result;
		$this->load->view('model_test2', $data);
	}
}
