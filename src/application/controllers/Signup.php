<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		$this->load->view('account_view');
	}
	public function login()
	{
		$this->load->view('login');
	}
}
