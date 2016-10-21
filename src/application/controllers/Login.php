<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function index()
	{
		$this->load->view('login_view');
	}
  public function check()
  {

		$user_id = $this->input->post('id');
		$password = $this->input->post('pass');
		$name = $this->input->post('name');
		$this->load->model('User_model','user');
		$ret = $this->user->initialize($user_id,$password);
		if($this->user->correct_password($ret))
		{
			$this->user->login();
			redirect(base_url().'home/'.$user_id);
		}
	  else
		{
			$this->load->view('unlogin_view');
		}





    //$this->load->view('top_view');


	}
	public function music_view()
	{
		$this->load->view('music_view');
	}
	public function sport_view()
	{
		$this->load->view('sport_view');
	}
	public function game_view()
	{
		$this->load->view('game_view');
	}
	public function back()
	{
		$this->load->view('top_view');
	}

}
