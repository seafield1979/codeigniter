<?php
class Test2Model extends CI_Model
{
    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Model クラスのコンストラクタを呼び出す
        parent::__construct();

        // config/database.php の設定でDB接続
        $this->load->database('default');
    }
    
    function test_get()
    {
        $query = $this-db->get('users');
        $data['query'] = 'query';
    }
    function test_query1()
    {
        $query = $this->db->query("select * from users;");
        return $query->result();
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
?>