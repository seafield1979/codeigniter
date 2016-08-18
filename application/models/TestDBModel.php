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
}
?>