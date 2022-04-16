<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function helloworld() {
		$data = [
			'nome' => "Danilo Henrique",
		];
		$this->load->view('hello_world', $data);
	}
}
