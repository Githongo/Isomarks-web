<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('uname')){
            //redirect('welcome');
        }

        $this->load->library('form_validation');
        $this->load->model('register_model');
        $this->load->helper(array('form'));
    }
    function index(){
        $this->load->view('templates/header');
        $this->load->view('pages/register');
        $this->load->view('templates/footer');
    }

    function validation(){
        $this->form_validation->set_rules('schoolCode', 'School Code', 'required|min_length[7]|max_length[8]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('inputPword', 'Password', 'required|min_length[6]|max_length[16]');
        $this->form_validation->set_rules('confirmPword', 'confirm Password', 'required|matches[inputPword]');

        if($this->form_validation->run()){
            $uid = random_int(1000,1000000000);
            $hashed_password = password_hash($this->input->post('inputPword'), PASSWORD_DEFAULT);
            $status = false;
            
            $data = array(
                'TeacherID' => $uid,
                'Name' => $this->input->post('name'),
                'Email' => $this->input->post('email'),
                'Password' => $hashed_password,
                'SchoolCode' => $this->input->post('schoolCode'),
                'Status' => $status,
                'UserID' => 3
            );

            $this->register_model->insert($data);

            redirect('register/success');
            
            
        }
        else{
            $this->index();
        }
    }

    public function success(){
        $this->load->view('templates/header');
        $this->load->view('templates/success');
        
    }

}


?>