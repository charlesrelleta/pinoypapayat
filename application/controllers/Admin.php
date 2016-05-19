<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
					parent::__construct();
	        $this->load->model("cms_model");
	}
	public function index()
	{
		$this->load->view('administrator/login_view');
	}

	public function home()
	{
		$this->load->view('administrator/home_view');
	}


	public function cms_home()
	{
		if ($query = $this->cms_model->get_home()) {
			$data['content'] = $query;
		}
		$this->load->view('administrator/cms_home_view', $data);
	}
	public function cms_about()
	{
	  if ($query = $this->cms_model->get_about()) {
        $data['content'] = $query;
      }
		$this->load->view('administrator/cms_about_view', $data);
	}
	public function cms_contacts()
	{
		if ($query = $this->cms_model->get_contacts()) {
			$data['content'] = $query;
		}
		$this->load->view('administrator/cms_contacts_view',$data);
	}

	public function update_home(){
		$data = array(
		'title' => $this->input->post('title'),
		'description' => $this->input->post('description'),
		'post_title' =>  $this->input->post('post_title'),
		'post_description' => $this->input->post('post_description')
	);
	$this->cms_model->update_home($data);
	redirect("Admin/cms_home");
	}

	public function update_about(){
		$data = array(
		'title' => $this->input->post('title'),
		'description' => $this->input->post('description'),
		'content' =>  $this->input->post('content')
	);
	$this->cms_model->update_about($data);
	redirect("Admin/cms_about");
	}

	public function update_contacts(){
		$data = array(
		'title' => $this->input->post('title'),
		'description' => $this->input->post('description'),
		'tel_title' =>  $this->input->post('tel_title'),
		'telephone' =>  $this->input->post('telephone'),
		'cel_title' =>  $this->input->post('cel_title'),
		'cellphone' =>  $this->input->post('cellphone'),
		'email_title' =>  $this->input->post('email_title'),
		'email' =>  $this->input->post('email'),
	);
	$this->cms_model->update_contacts($data);
	redirect("Admin/cms_contacts");
	}


}
