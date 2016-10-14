<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function main($user_id)
  {
    parent::login_check($user_id);
    $data = ['user_id' => $user_id];
    $this->load->view('top_view', $data);
  }
  public function music()
  {
    $this->load->view('music_view');
  }
}
