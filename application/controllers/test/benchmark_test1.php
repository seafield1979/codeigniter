<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Benchmark_Test1 extends CI_Controller {

	public function index()
	{
    // 処理速度を計測
    $this->benchmark->mark('my_mark_start');
    
		$data['message'] = 'This is test!!!';
		$data['title'] = "Test1";
    $this->benchmark->mark('my_mark_end');
    
    $elapsed_time = $this->benchmark->elapsed_time('my_mark_start', 'my_mark_end', 5);
    $data['time'] = $elapsed_time;
    
    $data['memory'] = $this->benchmark->memory_usage();

		$this->load->view('benchmark_test1', $data);
	}
}
