<?php
class Register_model extends CI_Model{

    function insert($data){
        $this->db->insert('tbl_users', $data);
        
    }
    function course($data){
        $this->db->insert('tbl_studentcourse', $data);
        
    }
    
    function get_courses(){
        $obj = $this->db->get('tbl_courses');
        $resultSet = $obj->result();
        return $resultSet;
    }
}



?>