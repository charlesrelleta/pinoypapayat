<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Accounts_model extends CI_Model {

    public function __construct() {
        //$this->load->database();
    }

    private $users = 'users';

    public function get_users() {
        $q = $this->db->get('accounts');
        $r = $q->result();
        return $r;
    }

    public function get_all() {
        $this->db->from('accounts');
        $this->db->order_by("user_id", "asc");
        $query = $this->db->get();
        return $query->result();
    }

    function get_by_id($id) {
        $query = $this->db
                ->select("*")
                ->from("accounts")
                ->where("user_id", $id)
                ->get();
        return $query->result();
        //	$this->db->where('serial', $id);
        //s	return $this->db->get($this->products);
    }

    function update_record($id,  $user_data) {
        $this->db->where('user_id', $id );
        $this->db->update('accounts', $user_data);
    }

}
