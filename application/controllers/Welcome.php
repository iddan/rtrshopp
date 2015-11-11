<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data = array(
			'page_title'=>'Welcome to RTRShopp', 
			'another_var' => 23
		);
		$this->load->view('welcome_message', $data);
	}
}
