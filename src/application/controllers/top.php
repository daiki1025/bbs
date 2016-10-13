<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class top extends CI_Controller {

	public function index()
	{
		$this->load->view('top_view');
	}
	public function move()
	{
		$this->load->view('music_view');
	}
}
