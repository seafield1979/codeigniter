<?php
class TestDBModel extends CI_Model
{
    function __construct()
    {
        // Model クラスのコンストラクタを呼び出す
        parent::__construct();

        // config/database.php の設定でDB接続
        $this->load->database();
    }
    
    function query_select()
    {
        $query = $this->db->query("select * from users;");
        if ($query) {
            return $query->result();
        }
        return FALSE;
    }

    function query_insert()
    {
        $name = "shutaro" . rand(0,1000);
        $birthday = date("Y-m-d h:i:s");
        $query = $this->db->query("insert into users (name, birthday) values (\"{$name}\",\"{$birthday}\")");
        if ($query) {
            return TRUE;
        }
        return FALSE;
    }
}
?>