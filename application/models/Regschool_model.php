<?php
class Regschool_model extends CI_Model{

    function insert($data){
        $this->db->insert('schools', $data);    
    }
    
    
}

?>