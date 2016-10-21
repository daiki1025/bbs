<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
  parent::__construct();
  $this->load->database();
}

  public function index()
  {
   if($this->input->post('name') != null)
    {

      $data=array('id'=>$this->input->post('id',true),
        'name'=>$this->input->post('name',true),
      'pass'=>md5($this->input->post('pass',true)));
      $this->db->insert('user',$data);





      $this->load->view('login_view');
      redirect(base_url().'login');
    }
    else
    {
        $this->load->view('account_view');
     }
    }
  }
