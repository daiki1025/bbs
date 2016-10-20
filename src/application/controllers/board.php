<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends CI_Controller
{
    public function __construct()
    {
  parent::__construct();
}

public function index() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('talk_model');
        $this->form_validation->set_rules('name', '名前', 'required|max_length[20]');
        $this->form_validation->set_rules('comment', 'コメント', 'required|max_length[255]');

        if($this->form_validation->run() === FALSE) {
            $this->load->view('category/music');
        } else {
          $this->talk_dmodel->insert();
            $this->load->view('music_japan');
        }
    }
}
