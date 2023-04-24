<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Index_model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    public function insert($data){
        $this->db->insert('contact',$data);
        return true;

    }



}