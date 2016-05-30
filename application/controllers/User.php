<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
					parent::__construct();
	}
	public function index()
	{
		$this->load->view('administrator/login_view');
	}

	public function dashboard()
	{
		$this->load->view('user/dashboard_view');
	}

	public function profile()
	{
		$this->load->view('user/profile_view');
	}
	

	}
