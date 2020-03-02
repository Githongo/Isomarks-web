<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
        public function __construct(){
            parent::__construct();
            if($this->session->userdata('type') != 0){
                redirect('login');
            }
            
            $this->load->model('Admin_model');
            $this->load->model('register_model');

        }

        function index(){
            $this->load->view('admin/header');
            $this->load->view('admin/index');
            $this->load->view('admin/footer');
        }

        function gensms(){
            $this->load->view('admin/header');
            $this->load->view('admin/gensms');
            $this->load->view('admin/footer');
        }

        function customsms(){
            $this->load->view('admin/header');
            $this->load->view('admin/customsms');
            $this->load->view('admin/footer');
        }
        
    
        




}
?>