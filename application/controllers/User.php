<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
        public function __construct(){
            parent::__construct();
            if(!$this->session->userdata('uname')){
                redirect('login');
            }
            

        }

        function index(){
            $this->load->view('pages/index');
        }
}