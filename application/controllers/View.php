<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('view_model');
        $this->load->helper('url');        
        
    }

    public function index()
    {
        $this->load->database();
        $this->load->model('view_model');
        $this->load->helper('url');
        $data['title'] = "View Data in DB";       
        $data['contacts']=$this->view_model->readContactData();
        $this->load->view('view',$data);
    }
    public function editContact($id)
    {

    /*  $data['Contacts']=$this->view_model->getContactData($id);  */
    /*  $this->load->view('view',$data);  */
        $data['name']= $this->input->post('name');
        $data['email']= $this->input->post('email');
        $data['phone']= $this->input->post('phone');
          
        $this->view_model->editContactData($id, $data);
        redirect('view');

    }
    public function deleteContact($id)
    {
        $this->load->database();
        $this->load->model('view_model');
        $this->load->helper('url'); 
        $this->view_model->deleteContactData($id, $data);
        redirect('view');
    } 

}