<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('top_view');
  }

  public function main($user_id)
  {
    parent::login_check($user_id,$password);
    $data = ['user_id' => $user_id];
    $this->load->view('top_view', $data);
  }


}
