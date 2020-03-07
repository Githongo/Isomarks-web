<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registerschool extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('regschool_model');
        $this->load->helper(array('form'));
    }

    public function index(){
        $this->load->view('templates/header');
        $this->load->view('pages/registerschool');
        $this->load->view('templates/footer');
    }

    function validation(){
        $this->form_validation->set_rules('schoolCode', 'School Code', 'required|min_length[7]|max_length[8]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('inputPword', 'Password', 'required|min_length[6]|max_length[16]');
        $this->form_validation->set_rules('confirmPword', 'confirm Password', 'required|matches[inputPword]');

        if($this->form_validation->run()){
            $SchoolCode = $this->input->post('schoolCode');
            $Name = $this->input->post('schoolName');
            $Email = $this->input->post('email');
            $Phone = $this->input->post('phone');
            $hashed_password = password_hash($this->input->post('inputPword'), PASSWORD_DEFAULT);
            $status = false;

                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'jpeg|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 800;
                $config['max_height']           = 800;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('logo_file'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                }
                elseif($this->upload->do_upload('logo_file')){
                        $filedata = $this->upload->data();
                        $filename = $filedata['file_name'];

                        $data = array(
                            'SchoolCode' => $SchoolCode,
                            'SchoolName' => $Name,
                            'Email' => $Email,
                            'Phone' => $Phone,
                            'Password' => $hashed_password,
                            'Status' => $status,
                            'Logo' => $filename
                        );

                        $this->regschool_model->insert($data);
                        redirect('Registerschool/verifying');
                        
                }
                else{
                    $data = array(
                        'SchoolCode' => $SchoolCode,
                        'SchoolName' => $Name,
                        'Email' => $Email,
                        'Phone' => $Phone,
                        'Password' => $hashed_password,
                        'Status' => $status,
                        'Logo' => "isomarks.png"
                    );
                    $this->regschool_model->insert($data);
                    redirect('Registerschool/verifying');   
                }  
            
        }
        else{
            $this->index();
        }
    }

    public function verifying(){
        $this->load->view('templates/header');
        $this->load->view('templates/verifying');
        
    }
}