<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct() {
        parent::__construct();


    }
    public function index()
    {
        $this->load->view('index');
        $this->load->database();
        $this->load->helper();
        $this->load->model('index_model');

    }

    public function insert_data()
{
        $this->load->model('index_model');
        $data['name']= $this->input->post('name');
        $data['email']= $this->input->post('email');
        $data['phone']= $this->input->post('phone');
        $this->index_model->insert($data);
        redirect('index');

}

}