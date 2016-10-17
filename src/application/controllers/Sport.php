<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sport extends MY_Controller {


 public function soccer()
 {
  $this->load->view('sport_soccer');
 }

 public function baseball()
 {
  $this->load->view('sport_baseball');
 }

 public function basketball()
 {
  $this->load->view('sport_basketball');
 }
}
