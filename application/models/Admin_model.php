<?php
class Admin_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('id')){
            redirect('login');
        }
        if($this->session->userdata('type') != 1){
            redirect('login');
        }
        
    }

    function get_users(){
        $obj = $this->db->get('tbl_users');
        $resultSet = $obj->result();
        return $resultSet;
    }

    

    function remove_user($UID){
        $this->db->delete('tbl_users', array('user_id' => $UID));
        redirect('admin/manage_users');
    }

    function block_user($UID){
        $this->db->update('tbl_users', array('suspended' => true), array('user_id' => $UID));
        redirect('admin/manage_users');
    }
    function unblock_user($UID){
        $this->db->update('tbl_users', array('suspended' => false), array('user_id' => $UID));
        redirect('admin/manage_users');
    }

    function change_access($UID, $UserType){
        if($UserType == "admin"){
            $userTypeIndex = 1;
        }
        elseif($UserType == "student"){
            $userTypeIndex = 2;
        }
        
        $this->db->update('tbl_users', array('user_role_id' => $userTypeIndex), array('user_id' => $UID));
        redirect('admin/manage_users');

    }

    function get_courses(){
        $this->db->select('*');
        $this->db->from('tbl_users'); 
        $this->db->join('tbl_studentcourse', 'tbl_studentcourse.user_id = tbl_users.user_id', 'left');
        $this->db->join('tbl_courses', 'tbl_courses.course_id = tbl_studentcourse.course_id', 'left');         
        $query = $this->db->get(); 
        if($query->num_rows() != 0)
        {
        
            $resultSet = $query->result();
            return $resultSet;
        }
        else
        {
            return false;
        }
    }


}

?>