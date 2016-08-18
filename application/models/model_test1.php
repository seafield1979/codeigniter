<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test1Model extends CI_Model {
  var $title   = '';
  var $content = '';
  var $date    = '';

  function __construct()
  {
      // Model クラスのコンストラクタを呼び出す
      parent::__construct();
  }
  
  function get_last_ten_entries()
  {
      $query = $this->db->get('entries', 10);
      return $query->result();
  }

  function insert_entry()
  {
      $this->title   = $_POST['title']; // 下の Note を参照してください
      $this->content = $_POST['content'];
      $this->date    = time();

      $this->db->insert('entries', $this);
  }

  function update_entry()
  {
      $this->title   = $_POST['title'];
      $this->content = $_POST['content'];
      $this->date    = time();

      $this->db->update('entries', $this, array('id' => $_POST['id']));
  }
}
