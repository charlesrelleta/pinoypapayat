<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Accounts_model extends CI_Model {

    public function __construct() {
        //$this->load->database();
    }

    function login($username, $password){
      $this -> db -> select('*');
  		$this->db->where("username",$username);
                  $this->db->where("password",$password);
                  $this->db->where("status",1);
  		$query = $this -> db -> get("accounts");

  		if($query -> num_rows() == 1)
  		{
  			return $query->result();
  		}
  		else
  		{

  			return false ;

  		}

    }

    function add_user($cont_data){
      	$query = $this->db->insert('accounts', $cont_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function get_users() {
        $q = $this->db->get('accounts');
        $r = $q->result();
        return $r;
    }

    public function get_all() {
        $this->db->from('accounts');
        $this->db->order_by("_id", "asc");
        $query = $this->db->get();
        return $query->result();
    }

    function get_by_id($id) {
        $query = $this->db
                ->select("*")
                ->from("accounts")
                ->where("_id", $id)
                ->get();
        return $query->result();
        //	$this->db->where('serial', $id);
        //s	return $this->db->get($this->products);
    }

    function update_record($id,  $user_data) {
        $this->db->where('_id', $id );
        $this->db->update('accounts', $user_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

  }
