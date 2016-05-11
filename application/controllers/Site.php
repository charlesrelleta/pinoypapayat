<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->load->view('client/home_view');
	}

	public function about()
	{
		  $this->load->helper('url');
		$this->load->view('client/about_view');
	}

	public function contact()
	{
		  $this->load->helper('url');
		$this->load->view('client/contact_view');
	}
	public function calculator()
	{
		  $this->load->helper('url');
		$this->load->view('client/calculator');
	}
}
