<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
        public function __construct(){
            parent::__construct();
            

        }

        function index(){
            $this->load->view('templates/header');
            $this->load->view('pages/index');
            $this->load->view('templates/footer');
        }

        function features(){
            $this->load->view('templates/header');
            $this->load->view('pages/features');
            $this->load->view('templates/footer');
        }
}