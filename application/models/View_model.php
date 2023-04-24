<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class View_model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    public function readContactData()
    {
        $this->db->select('*');
        $this->db->from('contact');
        $query = $this->db->get();
        return $query->result();
    }

    public function getContactData($id)
    {
     return $this->where('id',$id)->get('contact')->row();     

    }
    public function editContactData($id,$data)
    { 
        /*  >>or we can use
        $this->db->where('id',$id)->set($data)->update('contact');
        */
        $this->db->where('id',$id)->update('contact',$data); 

    }
     public function deleteContactData($id){
        $this->db->where('id',$id)->delete('contact'); 

    } 
 




}