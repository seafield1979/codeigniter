<?php
class Test1Model extends CI_Model
{
    private $_names;

    public function __construct()
    {
        parent::__construct();
        $this->_names = array(
            'taro' => '太郎',
            'hanako' => '花子'
        );
    }

    public function getNameJa($name)
    {
        if (isset($this->_names[$name])) {
            return $this->_names[$name];
        }
        return FALSE;
    }

    public function getNames()
    {
      if (isset($this->_names)) {
        return $this->_names;
      }
      return FALSE;
    }
}
?>