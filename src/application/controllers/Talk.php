<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Talk extends CI_Controller
{
  public function __construct()
  {
parent::__construct();
$this->load->database();
}

public function index()

  {
    $data=array('userid'=>$this->input->post('userid',true),
      'name'=>$this->input->post('name',true),
    'mess'=>$this->input->post('mess',true));
    $this->db->insert('userdata',$data);

    //DBからとってくる
    $this->db->select('name,mess');
    $query = $this->db->get('userdata');
    $value = $this->db->query($query);

    $test['data'] = $value;
    //$test['temp'] = $value
    $this->load->view('music_japan' , $test);

   }


  }
