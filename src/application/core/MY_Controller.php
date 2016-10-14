<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  protected function login_check($user_id)
  {
    $this->load->model('User_model', 'user');
    $this->user->initialize($user_id);
    if(!$this->user->is_logged_in())
    {
      redirect(base_url().'login');
    }
  }
}
