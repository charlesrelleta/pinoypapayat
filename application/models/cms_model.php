<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cms_model extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}
  private $content= 'content';

  public function get_about(){
        $q = $this->db->get('cms_about');
        $r = $q->result();
        return $r;
  }

  public function get_contacts(){
        $q = $this->db->get('cms_contact');
        $r = $q->result();
        return $r;
  }

	public function get_posts(){
	        $q = $this->db->get('cms_posts');
	        $r = $q->result();
	        return $r;
	  }

	public function get_home()
	{
		$q = $this->db->get('cms_home');
		$r = $q->result();
		return $r;
	}

	public function get_bmiResults(){
		$query = $this->db
		->select("*")
		->from("bmi_results")
		->order_by('_id', 'DESC')
		->get();

    return $query->result();
	}

  function post_get_by_id($id){
    $query = $this->db
    ->select("*")
    ->from("cms_posts")
    ->where("_id", $id)
    ->get();
    return $query->result();
		//	$this->db->where('serial', $id);
		//	return $this->db->get($this->products);
		}
		function add_post($cont_data){
		  $this->db->insert('cms_posts', $cont_data);
		}
		function add_bmiResult($cont_data){
		  $this->db->insert('bmi_results', $cont_data);
		}
		function update_about($cont_data){
		  $this->db->where('_id', 1);
		  $this->db->update('cms_about', $cont_data);
		}
  	function update_contacts($cont_data){
      $this->db->where('_id', 1);
      $this->db->update('cms_contact', $cont_data);
  	}

  	function update_home($cont_data){
      $this->db->where('_id', 1);
      $this->db->update('cms_home', $cont_data);
  	}

		function update_post($cont_data, $id){
	    $this->db->where('_id', $id);
	    $this->db->update('cms_posts', $cont_data);
		}

		function update_bmiResult($cont_data, $id){
			$this->db->where('_id', $id);
			$this->db->update('bmi_results', $cont_data);
		}
    function bmi_result($id){
      $query = $this->db
      ->select("*")
      ->from("bmi_results")
      ->where("_id", $id)
      ->get();
      return $query->result();
    }

		function deletepost($id){

		$this->db->where('_id', $id);
		$this->db->delete('cms_posts');
		}

}
