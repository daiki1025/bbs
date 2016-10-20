<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game extends MY_Controller {


 public function fps()
 {

  $this->load->model('Game_model');
  $value['data'] = $this->Game_model->talk_fps();
  //$value['data'] = "test";
  $this->load->view('game_fps', $value);

 }

 public function send_fps()
 {
 $this->load->model('Game_model');
 $this->Game_model->save_fps();
 redirect(base_url().'game/fps');
}

public function puzzle()
{
 $this->load->model('Game_model');
 $value['data'] = $this->Game_model->talk_puzzle();
 $this->load->view('game_puzzle', $value);
}

public function send_puzzle()
{
$this->load->model('Game_model');
$this->Game_model->save_puzzle();
redirect(base_url().'game/puzzle');
}

public function race()
{

 $this->load->model('Game_model');
 $value['data'] = $this->Game_model->talk_race();
 $this->load->view('game_race', $value);
}

public function send_race()
{
$this->load->model('Game_model');
$this->Game_model->save_race();
redirect(base_url().'game/race');
}
}
