<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{


	public function index()
	{
		// echo "halo from welcome controller";
		// die;
		$this->load->view('welcome_message');
	}
}
