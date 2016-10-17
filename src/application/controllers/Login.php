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
		$name = $this->input->post('name');
		$this->load->model('User_model', 'user');
		$this->user->initialize($user_id);
		if($this->user->correct_password($password))
		{
			$this->user->login();
			redirect(base_url().'home/'.$user_id);
			$password = "pass";
			$hash1=hash('sha256', $password);
			echo 'sha256:'.$hash1.'<br>';
			

		}
	  else
		{
			echo 'FAILED';
		}

   include "top.php";




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
