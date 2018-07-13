<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		echo 'selamat datang di website ini';
	}

	public function profil()
	{
		echo 'string';
	}

	public function nama($value)
	{
		echo 'nama saya '. $value;
	}

	// -------- Views

	public function view()
	{
		$this->load->view('welcome_message');
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */