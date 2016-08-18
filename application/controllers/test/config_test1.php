<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Config_Test1 extends CI_Controller {
	public function index()
	{
		// 自分の設定ファイルを呼び出す
		$this->config->load('my_view');

    $data['baseurl'] = $this->config->base_url();
    $data['siteurl'] = $this->config->site_url();

		$data['message'] = $this->config->item('message');
		$data['title'] = $this->config->item('title');
		$this->load->view('config_test1', $data);
	}
  public function hoge($hoge=NULL)
  {
    // 自分の設定ファイルを呼び出す
    $this->config->load('my_view');
    $data['message'] = $this->config->item('message') . " hoge";
    $data['title'] = $this->config->item('title');
    $data['baseurl'] = $this->config->base_url();
    $data['siteurl'] = $this->config->site_url();
    $this->load->view('config_test1', $data); 
  }
}
