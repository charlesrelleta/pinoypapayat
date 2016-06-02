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
	public function register()
	{
		$this->load->view('client/registration_view');
	}
	public function bmi_calculator()
	{
		$this->load->view('client/bmi_calculator');
	}

	public function tips_and_suggestions()
	{
		if ($query = $this->cms_model->post_get_by_bfast()) {
			$data['content'] = $query;
		}

		$this->load->view('client/dashboard_view', $data);
	}

  public function check_bmi($bmi_result){
    if($bmi_result < 18.5){
			$indicator = 1;
			if ($query = $this->cms_model->bmi_result($indicator)) {
				$data['content'] = $query;
			}
    }else if($bmi_result > 18.5 && $bmi_result < 25){
			$indicator = 2;
			if ($query = $this->cms_model->bmi_result($indicator)) {
				$data['content'] = $query;
			}
    }else if($bmi_result >= 25 && $bmi_result < 30){
			$indicator = 3;
			if ($query = $this->cms_model->bmi_result($indicator)) {
				$data['content'] = $query;
			}
    }else if($bmi_result >= 30 && $bmi_result < 35){
			$indicator = 4;
			if ($query = $this->cms_model->bmi_result($indicator)) {
				$data['content'] = $query;
			}
		}else if($bmi_result >= 35 && $bmi_result < 40){
			$indicator = 5;
			if ($query = $this->cms_model->bmi_result($indicator)) {
				$data['content'] = $query;
			}
    }else{
			$indicator = 6;
			if ($query = $this->cms_model->bmi_result($indicator)) {
				$data['content'] = $query;
			}
    }
		$this->load->view('client/bmi_result',$data);
  }

  public function imperial_result()
	{
    $lbs = $this->input->get('pounds');
    $ft =  $this->input->get('foot');
    $inch =  $this->input->get('inch');

		if($ft<=0){

			$err = array('error' => "Invalid Input. Must not Contain Negative Numbers or 0" );
			$this->load->view('client/bmi_calculator', $err);
		}else {
			$inches = ($ft * 12) + $inch;
			$inch2 = $inches * $inches;
			if($lbs<=0){

					$err = array('error' => "Invalid Input. Must not Contain Negative Numbers or 0" );
					$this->load->view('client/bmi_calculator', $err);
		}else {
			$result1 = ($lbs /$inch2) * 703;
			$this->check_bmi($result1);

			}
		}		//$this->load->view('client/bmi_result');
	}
  public function metric_result()
	{
    $kg = $this->input->get('kilogram');
    $m =  $this->input->get('meters');
		if($kg<=0 || $m<=0){

						$err = array('error' => "Invalid Input. Must not Contain Negative Numbers or 0" );
						$this->load->view('client/bmi_calculator', $err);
		}else {
			$meters =  $m * $m;
	    $result = $kg / $meters;
	    $this->check_bmi($result);
		}
		//$this->load->view('client/bmi_result');
	}

	public function goto_post(){
			$id = $this->uri->segment(3);

			if ($query = $this->cms_model->post_get_by_id($id)) {
				$data['content'] = $query;
			}
			$this->load->view('client/view_post', $data);
	}
	public function lunch()
	{
		if ($query = $this->cms_model->post_get_by_lunch()) {
			$data['content'] = $query;
		}

		$this->load->view('client/lunch_view', $data);
	}

	public function dinner()
	{
		if ($query = $this->cms_model->post_get_by_dinner()) {
			$data['content'] = $query;
		}

		$this->load->view('client/dinner_view', $data);
	}


	public function random()
	{
		if ($query = $this->cms_model->post_get_by_others()) {
			$data['content'] = $query;
		}

		$this->load->view('client/random_view', $data);
	}



}
