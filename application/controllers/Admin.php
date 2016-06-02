<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
					parent::__construct();
	        $this->load->model("cms_model");
	        $this->load->model("accounts_model");
	}
	public function index()
	{
		if ($this->session->userdata('logged_in')) {
			$this->accounts_management();
		}else {
		$this->load->view('administrator/login_view');
	}
}

	public function login(){
		if ($this->session->userdata('logged_in')) {
			$this->accounts_management();
		}else {
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'trim|xss_clean|required|callback_password_check');
			if ($this->form_validation->run()){
				$this->accounts_management();
			}else{
					$this->load->view('administrator/login_view');
			}
		}

	}
	public function logout(){
		$this->session->sess_destroy();
		redirect("admin");
	}

	public function password_check()
	{
		$user = $this->input->post('username');
    $pass=  $this->input->post('password');
    $result = $this->accounts_model->login($user, $pass);
    if($result){
			$newdata = array(
                   'username'  => $user,
                   'logged_in' => TRUE
               );

			$this->session->set_userdata($newdata);
      return TRUE;
    }else{
      $this->form_validation->set_message('password_check', 'Invalid email or password');
      return FALSE;
    }
	}

	public function profile(){
		if ($this->session->userdata('logged_in')) {
		$this->load->view('administrator/profile');
	}else {
		$this->login();
	}
}

	public function dashboard(){
		if ($this->session->userdata('logged_in')) {
		$this->load->view('administrator/dashboard_view');
		}else {
			$this->login();
		}
	}

	public function accounts_management()
		{
			if ($this->session->userdata('logged_in')) {
			if ($query = $this->accounts_model->get_users()) {
				$data['content'] = $query;
			}else {
				$data['content'] = false;
			}
			$this->load->view('administrator/accounts_view',$data);
		}else {
			$this->login();
		}
		}
	public function cms_home()
	{
			if ($this->session->userdata('logged_in')) {
		if ($query = $this->cms_model->get_home()) {
			$data['content'] = $query;
		}$this->load->view('administrator/cms_home_view', $data);
	}else {
		$this->login();
	}
}
	public function cms_about()
	{
		if ($this->session->userdata('logged_in')) {
	  if ($query = $this->cms_model->get_about()) {
        $data['content'] = $query;
      }$this->load->view('administrator/cms_about_view', $data);
	}else {
		$this->login();
	}
}
	public function cms_contacts()
	{
		if ($this->session->userdata('logged_in')) {
		if ($query = $this->cms_model->get_contacts()) {
			$data['content'] = $query;
		}
		$this->load->view('administrator/cms_contacts_view',$data);
	}else {
	$this->login();
	}
}
	public function cms_posts()
	{
			if ($this->session->userdata('logged_in')) {
		if ($query = $this->cms_model->get_posts()) {
			$data['content'] = $query;
		}else {
			$data['content'] = false;
		}
		$this->load->view('administrator/cms_posts_view',$data);
	}else {
	$this->login();
	}
}

	public function bmi_results(){
			if ($this->session->userdata('logged_in')) {
			if ($query = $this->cms_model->get_bmiResults()) {
				$data['content'] = $query;
			}else {
				$data['content'] = false;
			}
			$this->load->view('administrator/cms_bmi_results',$data);
	}else {
	$this->login();
	}
}

  public function goto_updatePost($id){
			if ($this->session->userdata('logged_in')) {
			if($this->uri->segment(3)){
				$id =$this->uri->segment(3);
			}
			if ($query = $this->cms_model->post_get_by_id($id)) {
				$data['content'] = $query;
			}
    	$this->load->view('administrator/cms_posts_update',$data);
	}else {
	$this->login();
	}
}



	  public function goto_updateBmiResult($id){
			if ($this->session->userdata('logged_in')) {
	      if($this->uri->segment(3)){
					$id =$this->uri->segment(3);
				}

				if ($query = $this->cms_model->bmi_result($id)) {
					$data['content'] = $query;
				}
	    	$this->load->view('administrator/cms_bmi_update',$data);
		}else {
		$this->login();
		}
	}

	public function goto_addPost(){
		if ($this->session->userdata('logged_in')) {
			$this->load->view('administrator/cms_posts_add');
	}else {
	$this->login();
	}
}
public function goto_deletePost(){
	if ($this->session->userdata('logged_in')) {
		if($this->uri->segment(3)){
			$id =$this->uri->segment(3);
		}

		if ($query = $this->cms_model->post_get_by_id($id)) {
			$data['content'] = $query;
		}
		$this->load->view('administrator/cms_posts_delete',$data);
}else {
$this->login();
}
}



	public function goto_addBmiResult(){
		if ($this->session->userdata('logged_in')) {
			$this->load->view('administrator/cms_bmi_add');
	}else {
	$this->login();
	}
}

	public function add_post(){
if ($this->session->userdata('logged_in')) {
		$this->form_validation->set_rules('title', 'Title', 'max_length[1000]|required');
		$this->form_validation->set_rules('description', 'Description', 'max_length[2000]|required');
		$this->form_validation->set_rules('content', 'content', 'max_length[5000]|required');
		$this->form_validation->set_rules('category', 'Category', 'required');

		if ($this->form_validation->run()){
					date_default_timezone_set("Asia/Hong_Kong");
					$date_info = date('Y-m-d H:i:s');
					$data = array(
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'content' =>  $this->input->post('content'),
					'category' =>  $this->input->post('category')
				);
					$this->cms_model->add_post($data);
					redirect("Admin/cms_posts");
		}else{
				$this->goto_addPost();
			}
	}else {
	$this->login();
	}
}

	public function add_bmiResult(){
if ($this->session->userdata('logged_in')) {
				$this->form_validation->set_rules('title', 'Title', 'max_length[1000]|required');
				$this->form_validation->set_rules('description', 'Description', 'max_length[2000]|required');
				$this->form_validation->set_rules('tips', 'tips', 'max_length[5000]|required');
				$this->form_validation->set_rules('indicator', 'indicator', 'max_length[100]|required');

				if ($this->form_validation->run()){
						$data = array(
						'title' => $this->input->post('title'),
						'description' => $this->input->post('description'),
						'tips' =>  $this->input->post('tips'),
						'indicator' =>  $this->input->post('indicator')
					);
					$this->cms_model->add_bmiResult($data);
					redirect("Admin/bmi_results");
				}else{
						$this->goto_addBmiResult();
					}
	}else {
	$this->login();
	}
}

	public function update_about(){
		if ($this->session->userdata('logged_in')) {
		$this->form_validation->set_rules('title', 'Title', 'max_length[1000]|required');
		$this->form_validation->set_rules('description', 'Description', 'max_length[1000]|required');
		$this->form_validation->set_rules('content', 'content', 'max_length[5000]|required');

		if ($this->form_validation->run()){

				$data = array(
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'content' =>  $this->input->post('content')
			);
			$this->cms_model->update_about($data);
			redirect("Admin/cms_about");
		}else{
				$this->cms_about();
			}

	}else {
	$this->login();
	}
}


	public function update_home(){
			if ($this->session->userdata('logged_in')) {
		$this->form_validation->set_rules('title', 'Title', 'max_length[1000]|required');
		$this->form_validation->set_rules('description', 'Description', 'max_length[1000]|required');
		$this->form_validation->set_rules('post_title', 'post_title', 'max_length[1000]|required');
		$this->form_validation->set_rules('post_description', 'post_description', 'max_length[10000]|required');

		if ($this->form_validation->run()){
			$data = array(
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'post_title' =>  $this->input->post('post_title'),
			'post_description' => $this->input->post('post_description')
		);
		$this->cms_model->update_home($data);
		redirect("Admin/cms_home");
		}else{
				$this->cms_home();
			}
	}else {
	$this->login();
	}
}


	public function update_contacts(){
			if ($this->session->userdata('logged_in')) {
		$this->form_validation->set_rules('title', 'Title', 'max_length[1000]|required');
		$this->form_validation->set_rules('description', 'Description', 'max_length[1000]|required');
		$this->form_validation->set_rules('telephone', 'telephone', 'max_length[1000]|required');
		$this->form_validation->set_rules('cellphone', 'cellphone', 'max_length[1000]|required');
		$this->form_validation->set_rules('email', 'email', 'max_length[1000]|required|valid_email');

		if ($this->form_validation->run()){
	$data = array(
	'title' => $this->input->post('title'),
	'description' => $this->input->post('description'),
	'telephone' =>  $this->input->post('telephone'),
	'cellphone' =>  $this->input->post('cellphone'),
	'email' =>  $this->input->post('email'),
);
$this->cms_model->update_contacts($data);
redirect("Admin/cms_contacts");
		}else{
				$this->cms_contacts();
			}
	}else {
	$this->login();
	}
}

	public function update_post(){
		if ($this->session->userdata('logged_in')) {
			$this->form_validation->set_rules('title', 'Title', 'max_length[1000]|required');
			$this->form_validation->set_rules('description', 'Description', 'max_length[2000]|required');
			$this->form_validation->set_rules('content', 'content', 'max_length[5000]|required');

			if ($this->form_validation->run()){

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
			}else{
					$id = $this->input->post('id');
					$this->goto_updatePost($id);

				}
	}else {
	$this->login();
	}
}

	public function update_bmiResult(){
if ($this->session->userdata('logged_in')) {
		$this->form_validation->set_rules('title', 'Title', 'max_length[1000]|required');
		$this->form_validation->set_rules('description', 'Description', 'max_length[2000]|required');
		$this->form_validation->set_rules('tips', 'tips', 'max_length[5000]|required');

		if ($this->form_validation->run()){

					date_default_timezone_set("Asia/Hong_Kong");
				  $date_info = date('Y-m-d H:i:s');
					$data = array(
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'tips' =>  $this->input->post('tips'),
					'date_updated' => $date_info);

						$id = $this->input->post('id');
						$this->cms_model->update_bmiResult($data,$id);
						redirect("Admin/bmi_results");
		}else{
				$id = $this->input->post('id');
				$this->goto_updateBmiResult($id);

			}
		}else {
		$this->login();
		}
	}
	public function verify_registration(){
		if ($this->session->userdata('logged_in')) {
			$this->form_validation->set_rules('username', 'Username', 'min_length[6]|max_length[50]|trim|required');
			$this->form_validation->set_rules("password", "Password", 'min_length[6]|max_length[50]|trim|xss_clean|required|matches[confirmpassword]');
			$this->form_validation->set_rules("confirmpassword", "Confirm Password", 'min_length[6]|trim|xss_clean|required');
			$this->form_validation->set_rules('firstname', 'First Name', 'required');
			$this->form_validation->set_rules('middlename', 'Middle Name', 'required');
			$this->form_validation->set_rules('lastname', 'Last Name', 'required');
			$this->form_validation->set_rules('license', 'License Number', 'required');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('birthdate', 'Birth Date', 'required');
			$this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|required');
			$this->form_validation->set_rules('profession', 'Profession', 'required');

		if ($this->form_validation->run()){
			$data = array(
 					'username' => $this->input->post('username'),
 					'password' => sha1(md5	($this->input->post('password'))),
 					'name_first' =>  $this->input->post('firstname'),
 					'name_middle' =>  $this->input->post('middlename'),
 					'name_last' =>  $this->input->post('lastname'),
 					'number_license' =>  $this->input->post('license'),
 					'gender' =>  $this->input->post('gender'),
 					'birthdate' =>  $this->input->post('birthdate'),
 					'email' =>  $this->input->post('email'),
 					'profession' =>  $this->input->post('profession'),
				);
						$result = $this->accounts_model->add_user($data);
							if($result){
								$this->load->view('administrator/login_view');
							}else{
								$this->load->view('client/registration_view');
							}
						}else{
			$this->load->view('client/registration_view');
			}
		}else {
		$this->login();
		}
	}

		public function account_activation(){
			if ($this->session->userdata('logged_in')) {
			$id =  $this->uri->segment(3);
			$data = array("status" => 1);
			$result = $this->accounts_model->update_record($id, $data);
			$this->accounts_management();
		}else {
		$this->login();
		}
	}


		public function account_deactivation(){
			if ($this->session->userdata('logged_in')) {
			$id =  $this->uri->segment(3);
			$data = array("status" => 2);
			$result = $this->accounts_model->update_record($id, $data);
			$this->accounts_management();
		}else {
		$this->login();
		}
	}



		public function deletepost(){
	if ($this->session->userdata('logged_in')) {
				$id = $this->input->post('id');
						$this->cms_model->deletepost($id);
						redirect("Admin/cms_posts");
			}else {
		$this->login();
		}
	}

}
