<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game extends MY_Controller {


 public function fps()
 {
  $this->load->view('game_fps');
 }

 public function puzzle()
 {
  $this->load->view('game_puzzle');
 }

 public function race()
 {
  $this->load->view('game_race');
 }
}
