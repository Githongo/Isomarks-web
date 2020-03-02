<?php
class Admin_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('id')){
            redirect('login');
        }
        if($this->session->userdata('type') != 0){
            redirect('login');
        }
        
    }



}

?>