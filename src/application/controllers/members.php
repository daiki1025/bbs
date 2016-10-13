<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class members extends CI_Controller {
  public function db_entry()

  $name=$this->session->userdata('name');
  $pass=$this->session->userdata('pass');

  $this->load->datebase();
  $sql="insert into 'user'('user_id','password') values('$user_id','$password');
  $this->db-
  >query($sql,array($user_id,$password));
  $this->session->sess_destroy();
  $this->load->view('login');
{
  public function logout()
}
	$this->session->sess_destroy();
	redirect ("login_view");

  public function




}
