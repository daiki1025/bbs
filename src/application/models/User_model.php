<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{

  private $_user_id;
  private $_name;
  private $_password;

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function initialize($user_id)
  {
    $this->db->select('
      id
      , name
      , pass
    ');
    $this->db->from('user');
    $this->db->where('id', $user_id);
    $result = $this->db->get()->result_array();
    if(count($result) !== 1)
    {
      // TODO FALSE 返却でよいかどうかは要検討
      return FALSE;
    }
    $user = $result[0];
    $this->_user_id = $user['id'];
    $this->_name = $user['name'];
    $this->_password = $user['pass'];
  }

  public function correct_password($password)
  {
    return $this->_password == $password;
  }

  public function save()
  {
    $name=$this->session->userdata('name');
    $pass=$this->session->userdata('pass');

    $data = array(
        'id' => 'id',
        'name' => 'name',
        'pass' => 'pass'
);

$this->db->insert('user', $data);

    //$this->load->database();
  
  }
}
