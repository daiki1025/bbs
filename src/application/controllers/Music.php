<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Music extends MY_Controller {

  public function index()
  {
  $this->load->view('music_japan');
  }

 public function japan()
 {

  $this->load->model('Talk_model');
  $value['data'] = $this->Talk_model->talk();
  //$value['data'] = "test";
  $this->load->view('music_japan', $value);

 }

 public function send()
 {
 $this->load->model('Talk_model');
 $this->Talk_model->save();
 redirect(base_url().'music/japan');
}

public function foreign()
{
 $this->load->model('Talk_model');
 $value['data'] = $this->Talk_model->talk_foreign();
 $this->load->view('music_foreign', $value);
}

public function send_foreign()
{
$this->load->model('Talk_model');
$this->Talk_model->save_foreign();
redirect(base_url().'music/foreign');
}

public function rock()
{

 $this->load->model('Talk_model');
 $value['data'] = $this->Talk_model->talk_rock();
 $this->load->view('music_rock', $value);
}

public function send_rock()
{
$this->load->model('Talk_model');
$this->Talk_model->save_rock();
redirect(base_url().'music/rock');
}
}
