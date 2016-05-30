<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
					parent::__construct();
	        $this->load->model("cms_model");
	        $this->load->model("accounts_model");
					$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('administrator/login_view');
	}

	public function login(){
				$this->form_validation->set_rules('username', 'Username', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required|callback_password_check');
		if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('myform');
				}
				else
				{
					$this->load->view('formsuccess');
				}
			$username = $this->input->get('username');
	    $password = $this->input->get('password');
	    $result = $this->accounts_model->login($username, $password);
	    if($result)
	    {
		      $this->home();
	    }
	    else
	    {
	      	echo "false";
	    }
	}

	public function

	public function home()
	{
		$this->load->view('administrator/home_view');
	}

	public function accounts_management()
		{

			if ($query = $this->accounts_model->get_users()) {
				$data['content'] = $query;
				}
			else {
				$data['content'] = false;
			}

			$this->load->view('administrator/accounts_view',$data);
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
	public function cms_posts()
	{

		if ($query = $this->cms_model->get_posts()) {
			$data['content'] = $query;
			}
		else {
			$data['content'] = false;
		}

		$this->load->view('administrator/cms_posts_view',$data);
	}

  public function goto_updatePost(){
      $id = $this->uri->segment(3);
			if ($query = $this->cms_model->post_get_by_id($id)) {
				$data['content'] = $query;
			}
    	$this->load->view('administrator/cms_posts_update',$data);
	}

	public function goto_addPost(){
			$this->load->view('administrator/cms_posts_add');
	}

	public function add_post(){
		$data = array(
		'title' => $this->input->post('title'),
		'description' => $this->input->post('description'),
		'content' =>  $this->input->post('content')
	);
	$this->cms_model->add_post($data);
redirect("Admin/cms_posts");
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

	public function update_post(){

		date_default_timezone_set("Asia/Hong_Kong");
	  $date_info = date('Y-m-d H:i:s');
		$data = array(
		'title' => $this->input->post('title'),
		'description' => $this->input->post('description'),
		'content' =>  $this->input->post('content'),
		'date_updated' => $date_info
	);
	$id = $this->input->post('id');
	$this->cms_model->update_post($data,$id);
	redirect("Admin/cms_posts");
	}

	function verify_registration()
	  {
			$data = array(
			'username' => $this->input->get('username'),
			'password' => $this->input->get('password'),
			'name_first' =>  $this->input->get('firstname'),
			'name_middle' =>  $this->input->get('middlename'),
			'name_last' =>  $this->input->get('lastname'),
			'number_license' =>  $this->input->get('license'),
			'gender' =>  $this->input->get('gender'),
			'birthdate' =>  $this->input->get('birthdate'),
			'email' =>  $this->input->get('email'),
			'profession' =>  $this->input->get('profession'),
			);
			$result = $this->accounts_model->add_user($data);

			if($result)
			{
					echo "true";
					redirect("Admin/");
			}
			else
			{
					echo "false";
			}

		}

	}
