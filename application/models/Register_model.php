<?php
class Register_model extends CI_Model{

    function insert($data){
        $this->db->insert('teachers', $data);
        
    }
    
    
}



?>