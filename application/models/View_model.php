<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class View_model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }


    public function get_contact_data($id = null)
    {
        $this->db->select("*");
        $id !== null ? $this->db->where('id',$id) : null;
        $this->db->from('contact');
        $query = $this->db->get();     
        if($id !== null){
            return $query->row(); 
        } else{
            return $query->result();
        } 
    }
    

    public function insert_and_edit_contact_data($id=null,$data){
        $id==null?$this->db->insert('contact',$data):$this->db->where('id',$id)->update('contact',$data);
        return true;
    }

    public function deleteContactData($id){
        $this->db->where('id',$id)->delete('contact'); 
        return true;
    } 
 
    public function get_Employee_Data()
    {
        $this->db->select('*');
        $this->db->from('employee');
        $query = $this->db->get();
        return $query->result();
    }



}