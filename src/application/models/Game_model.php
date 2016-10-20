<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function save_fps()
  {
    $data=array('userid'=>$this->input->post('userid',true),
      'name'=>$this->input->post('name',true),
    'mess'=>$this->input->post('mess',true));
    $this->db->insert('gamefps',$data);
  }

  public function talk_fps()
  {
    //DBからとってくる
    $this->db->select('name,mess');
    $this->db->from('gamefps');

    $value = $this->db->get()->result_array();

    return $value;
  }

  public function save_puzzle()
  {
    $data=array('userid'=>$this->input->post('userid',true),
      'name'=>$this->input->post('name',true),
    'mess'=>$this->input->post('mess',true));
    $this->db->insert('gamepuzzle',$data);
  }

  public function talk_puzzle()
  {
    $this->db->select('name,mess');
    $this->db->from('gamepuzzle');
    $value = $this->db->get()->result_array();

    return $value;
  }

  public function save_race()
  {
    $data=array('userid'=>$this->input->post('userid',true),
      'name'=>$this->input->post('name',true),
    'mess'=>$this->input->post('mess',true));
    $this->db->insert('gamerace',$data);
  }

  public function talk_race()
  {
    $this->db->select('name,mess');
    $this->db->from('gamerace');
    $value = $this->db->get()->result_array();

    return $value;
  }





}
