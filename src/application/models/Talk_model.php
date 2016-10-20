<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Talk_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function save()
  {
    $data=array('userid'=>$this->input->post('userid',true),
      'name'=>$this->input->post('name',true),
    'mess'=>$this->input->post('mess',true));
    $this->db->insert('userdata',$data);
  }

  public function talk()
  {
    //DBからとってくる
    $this->db->select('name,mess');
    $this->db->from('userdata');

    $value = $this->db->get()->result_array();

    return $value;
  }

  public function foreign()
  {
    $data=array('userid'=>$this->input->post('userid',true),
      'name'=>$this->input->post('name',true),
    'mess'=>$this->input->post('mess',true));
    $this->db->insert('musicforeign',$data);
  }

  public function talk_foreign()
  {
    $this->db->select('name,mess');
    $this->db->from('musicforeign');
    $value = $this->db->get()->result_array();

    return $value;
  }

  public function save_foreign()
  {
    $data=array('userid'=>$this->input->post('userid',true),
      'name'=>$this->input->post('name',true),
    'mess'=>$this->input->post('mess',true));
    $this->db->insert('musicforeign',$data);
  }

  public function talk_rock()
  {
    $this->db->select('name,mess');
    $this->db->from('musicrock');
    $value = $this->db->get()->result_array();

    return $value;
  }

  public function save_rock()
  {
    $data=array('userid'=>$this->input->post('userid',true),
      'name'=>$this->input->post('name',true),
    'mess'=>$this->input->post('mess',true));
    $this->db->insert('musicrock',$data);
  }



}
