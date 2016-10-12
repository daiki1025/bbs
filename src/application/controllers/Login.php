<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login_view');
	}
  public function check()
  {

		$user_id = $this->input->post('id');
		$password = $this->input->post('pass');
		$this->load->model('User_model', 'user');
		$this->user->initialize($user_id);
		if($this->user->correct_password($password))
		{
			$this->load->view('top_view');
		}
		else
		{
			echo 'FAILED';
		}
    //$this->load->view('top_view');


	}

}
