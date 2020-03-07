<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SendSMS extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('type') != 0){
            redirect('login');
        }
        
        $this->load->model('sms_model');

    }

    function index(){
        if ($this->input->post('singleContact') || $this->input->post('contactFile')) { 
            $SinleContact = $this->input->post('singleContact');
            $ContactFile = $this->input->post('contactFile');
            
            if($this->input->post('message')){
                $Message = $this->input->post('message');
                $this->sms_model->sendsms($SinleContact, $ContactFile, $Message);
            }
            else{
                redirect('admin/customsms');
            }

        }
        else{
            echo "No contact Inserted...please go back and insert single contact or contact file";
        }
        
    }



}