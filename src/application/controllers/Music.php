<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Music extends MY_Controller {


 public function japan()
 {
  $this->load->view('music_japan');
 }

 public function foreign()
 {
  $this->load->view('music_foreign');
 }

 public function rock()
 {
  $this->load->view('music_rock');
 }
}
