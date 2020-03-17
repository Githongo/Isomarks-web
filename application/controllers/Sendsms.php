<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SendSMS extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('type') != 0){
            redirect('login');
        }
        
        $this->load->model('sms_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form'));

    }

    function index(){
        if ($this->input->post('singleContact')) { 
            $SinleContact = $this->input->post('singleContact');
            //$this->form_validation->set_rules('message', 'Message', 'required|min_length[3]');
            
            if($this->input->post('message')){
                $Message = $this->input->post('message');
                $this->sms_model->sendsms($SinleContact, $Message);
            }
            else{
                //$this->index();
                echo "No Message Inserted...please go back and write something";
            }

        }
        elseif(!$this->input->post('singleContact')){
            if($this->input->post('message')){
                    $config['upload_path']          = './uploads/';
                    $config['allowed_types']        = 'csv|xlsx|xls';
                    $config['max_size']             = 5000;
                    $config['max_width']            = 0;
                    $config['max_height']           = 0;

                    $this->load->library('upload', $config);

                    if ( ! $this->upload->do_upload('contactFile'))
                    {
                            $error = array('error' => $this->upload->display_errors());

                            print_r($error);
                    }
                    else{
                            $filedata = $this->upload->data();
                            $filename = $filedata['file_name'];
                            $Message = $this->input->post('message');

                            $data = array(
                                'contacts' => $filename
                            );

                            $this->sms_model->loadupload($filename, $Message);
                            
                    }
                }
                else{
                    echo "No Message Inserted...please go back and write something";
                }
        }
       
        else{
            echo "No contact Inserted...please go back and insert single contact or contact file";
        }
        
    }



}