<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function out($user_id)
  {
    $this->load->model('User_model', 'user');
    $this->user->initialize($user_id);
    $this->user->logout();
    redirect(base_url().'login');
  }
}
