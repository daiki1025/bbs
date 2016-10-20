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
    $CI = & get_instance();
    $CI->load->library('session');
    $this->session = $CI->session;
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
    $name=$this->session->userdata('id1');
    $pass=$this->session->userdata('pass1');

    $data = [
        'id' => 'id1',
        'name' => 'id1',
        'pass' => 'pass1'
      ];

     $this->db->insert('user', $data);
  }

  // public function index()
  //  {
  //    if($this->input->post('id1') !=null)
  //    {
  //      $data=array('data'=>$this->input->post('data',true),
  //      'id1'=>$this=>$this->input->post('id1',true),
  //      'content'=>$this->input->post(''))
  //    }
  //  }

   public function login()
   {
     $this->session->set_userdata(['user_id' => $this->_user_id]);
   }

   public function is_logged_in()
   {
     return $this->session->userdata('user_id') !== NULL;
   }

   public function logout()
   {
     $this->session->unset_userdata('user_id');
   }

   public function name()
   {
     //DBからとってくる
     $this->db->select('name');
     $this->db->from('user');

     $value = $this->db->get()->result_array();

     return $value;
   }
}
