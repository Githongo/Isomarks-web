<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('uname')){
            redirect('landing');
        }

        $this->load->library('form_validation');
        $this->load->library('encrypt');
        $this->load->model('register_model');
        $this->load->helper(array('form'));
    }
    function index(){
        $results = $this->register_model->get_courses();
            $data = array(
                'row' => $results
            );
        $this->load->view('pages/register', $data);
    }

    function validation(){
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('u_email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('pword', 'Password', 'required|min_length[6]|max_length[16]');

        if($this->form_validation->run()){
            $uid = random_int(1000,100000);
            $encrypted_password = $this->encrypt->encode($this->input->post('pword'));
            $sus = false;
            
            $data = array(
                'user_id' => $uid,
                'user_name' => $this->input->post('username'),
                'user_email' => $this->input->post('u_email'),
                'user_address' => $this->input->post('u_address'),
                'user_role_id' => $this->input->post('user_id'),
                'Password' => $encrypted_password,
                'suspended' => $sus
            );

            $data2 = array(
                'user_id' => $uid,
                'course_id' => $this->input->post('course'),
                
            );
            $this->register_model->insert($data);
            $this->register_model->course($data2);

            redirect('login');
            
            
        }
        else{
            $this->index();
        }
    }

}


?>