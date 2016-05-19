<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct(){
					parent::__construct();
	        $this->load->model("cms_model");
	}
	public function index()
	{
		if ($query = $this->cms_model->get_home()) {
			$data['content'] = $query;
		}
		$this->load->view('client/home_view',$data);
	}

	public function about()
	{
    if ($query = $this->cms_model->get_about()) {
        $data['content'] = $query;
      }
		$this->load->view('client/about_view', $data);
	}

	public function contact()
	{
		if ($query = $this->cms_model->get_contacts()) {
			$data['content'] = $query;
		}
		$this->load->view('client/contact_view', $data);
	}
	public function calculator()
	{
		  $this->load->helper('url');
		$this->load->view('client/calculator');
	}
}
