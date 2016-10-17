<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends CI_Controller
{



public function index(){
	$this->load->library("encrypt");
	$data["my_message"] = "こんにちは！";
	$data["my_encrypted_message"] = $this->encrypt->encode($data["my_message"]);
  }
}
