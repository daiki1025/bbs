<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller {

	public function music()
	{
		$this->load->view('music_view');
	}

  public function sport()
  {
    $this->load->view('sport_view');
  }

  public function game()
  {
    $this->load->view('game_view');
  }

  public function back()
  {
    $this->load->view('top_view');
  }


}
