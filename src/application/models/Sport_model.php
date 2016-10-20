<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sport_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function save_soccer()
  {
    $data=array('userid'=>$this->input->post('userid',true),
      'name'=>$this->input->post('name',true),
    'mess'=>$this->input->post('mess',true));
    $this->db->insert('sportsoccer',$data);
  }

  public function talk_soccer()
  {
    //DBからとってくる
    $this->db->select('name,mess');
    $this->db->from('sportsoccer');

    $value = $this->db->get()->result_array();

    return $value;
  }

  public function save_baseball()
  {
    $data=array('userid'=>$this->input->post('userid',true),
      'name'=>$this->input->post('name',true),
    'mess'=>$this->input->post('mess',true));
    $this->db->insert('sportbaseball',$data);
  }

  public function talk_baseball()
  {
    $this->db->select('name,mess');
    $this->db->from('sportbaseball');
    $value = $this->db->get()->result_array();

    return $value;
  }

  public function save_basketball()
  {
    $data=array('userid'=>$this->input->post('userid',true),
      'name'=>$this->input->post('name',true),
    'mess'=>$this->input->post('mess',true));
    $this->db->insert('sportbasketball',$data);
  }

  public function talk_basketball()
  {
    $this->db->select('name,mess');
    $this->db->from('sportbasketball');
    $value = $this->db->get()->result_array();

    return $value;
  }





}
