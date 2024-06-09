<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require  'vendor/autoload.php';
/* use \Mpdf\Mpdf; */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php'; */

class View extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('view_model');
        $this->load->helper('url');  
        $this->load->library('session');      
        
    }

    public function index()
    {
        $data['title'] = "View Data from DB";       
        $data['contacts']=$this->view_model->get_contact_data();
        $this->load->view('view',$data);
    }

    public function insert_and_edit_data($id=null)
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('validation_errors', validation_errors());
            redirect('view');
        } else {
        $data['id']= $this->input->post('id');
        $data['name']= $this->input->post('name');
        $data['email']= $this->input->post('email');
        $data['phone']= $this->input->post('phone');
        $this->view_model->insert_and_edit_contact_data($data['id'], $data);
        redirect('view');

        }
    }

    public function get_data_id()
    {
        $id = $this->input->post('id');
        $data = $this->view_model->get_contact_data($id);
        echo json_encode($data);
    }
    public function deleteContact($id)
    {
        $this->view_model->deleteContactData($id, $data);
        redirect('view');
    } 

    public function mailer()
    {
        $this->load->view('mailer');
    }

    public function send_mail()
    {
    
                
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'user@example.com';                     //SMTP username
            $mail->Password   = 'secret';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('from@example.com', 'Mailer');
            $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
            $mail->addAddress('ellen@example.com');               //Name is optional
            $mail->addReplyTo('info@example.com', 'Information');
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');

            //Attachments
            $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }
    public function print_pdf()
    {

        /* $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML("hi");
        $referral_letter = $mpdf->Output('', 'S');  */
    }
}