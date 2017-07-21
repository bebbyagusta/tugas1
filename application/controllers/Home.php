<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['$selamat'] = "Welcome, My Working-World";

		$this->load->view('home',$data);
	}
}