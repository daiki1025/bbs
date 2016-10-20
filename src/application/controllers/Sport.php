<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sport extends MY_Controller {


 public function soccer()
 {

  $this->load->model('Sport_model');
  $value['data'] = $this->Sport_model->talk_soccer();
  //$value['data'] = "test";
  $this->load->view('sport_soccer', $value);

 }

 public function send_soccer()
 {
 $this->load->model('Sport_model');
 $this->Sport_model->save_soccer();
 redirect(base_url().'sport/soccer');
}

public function baseball()
{
 $this->load->model('Sport_model');
 $value['data'] = $this->Sport_model->talk_baseball();
 $this->load->view('sport_baseball', $value);
}

public function send_baseball()
{
$this->load->model('Sport_model');
$this->Sport_model->save_baseball();
redirect(base_url().'sport/baseball');
}

public function basketball()
{

 $this->load->model('Sport_model');
 $value['data'] = $this->Sport_model->talk_basketball();
 $this->load->view('sport_basketball', $value);
}

public function send_basketball()
{
$this->load->model('Sport_model');
$this->Sport_model->save_basketball();
redirect(base_url().'sport/basketball');
}
}
