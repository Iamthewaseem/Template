<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

 
	public function index()
	{
		$this->load->view('layout/head');
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidbar');
		$this->load->view('starter');
		$this->load->view('layout/footer');
	}
}
