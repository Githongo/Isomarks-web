<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
        public function __construct(){
            parent::__construct();
            if($this->session->userdata('type') != 1){
                redirect('login');
            }
            
            $this->load->model('Admin_model');
            $this->load->model('register_model');

        }

        function index(){
            $this->load->view('admin/admin');
        }
        
    
        function manage_users(){
            $results = $this->Admin_model->get_courses();
            
            $data = array(
                'row' => $results
            );
            $this->load->view('admin/admin');
            $this->load->view('admin/manage_users', $data);
        }
        function remove_user($UID){
            $this->Admin_model->remove_user($UID);
        }

        function block_user($UID){
            $this->Admin_model->block_user($UID);
        }

        function unblock_user($UID){
            $this->Admin_model->unblock_user($UID);
        }

        function change_access(){
            $UserID = $this->input->post("user_id");
            $UserType = $this->input->post("userType");

            $this->Admin_model->change_access($UserID, $UserType);
        }

        function register_users(){
            $this->load->view('admin/admin');
            $results = $this->register_model->get_courses();
            $data = array(
                'row' => $results
            );
            $this->load->view('pages/register', $data);
        }

        function logout()
 	    {
		$data = $this->session->all_userdata();
		foreach($data as $row => $rows_value)
		{
		$this->session->unset_userdata($row);
		}
		redirect('login');
	    }
        




}
?>