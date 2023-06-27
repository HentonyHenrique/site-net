<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Downloads extends CI_Controller
{

	public function index()
	{
		$this->load->view('download/index');
	}
}
