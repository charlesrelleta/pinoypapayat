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

	public function get_home()
	{
		$q = $this->db->get('cms_home');
		$r = $q->result();
		return $r;
	}

  function get_by_id($id){
    $query = $this->db
    ->select("*")
    ->from("content")
    ->where("cont_id", $id)
    ->get();
    return $query->result();
	//	$this->db->where('serial', $id);
	//	return $this->db->get($this->products);
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


}
