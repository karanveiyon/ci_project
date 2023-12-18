<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';
use chriskacerguis\RestServer\RestController;

class Api extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index_get()
    {

        $this->response("This is the API GET Request Response!", 200);
    }
    public function employee_details_get()
    {
        try {
            $this->load->model("view_model");
            $employee = $this->view_model->get_Employee_Data();
            return $this->response(print_r($employee), 200);
          }
          catch( Exception $e ) {
            log_message( 'error', $e->getMessage( ) . ' in ' . $e->getFile() . ':' . $e->getLine() );
            $results = array('status' => "false",'message' => $e->getMessage(),'data' => (object)array());
            return $this->response($results);
          }
    }
}
?>
