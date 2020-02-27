<?php
    class Authentication extends CI_Model{
        public function __construct(){
            $this->load->library('encrypt');
        }

        function can_login($email, $password){
            $query = $this->db->get_where('tbl_users', array('user_email' => $email));

            if($query->num_rows() > 0){
                foreach($query->result() as $row){
                    $store_pword = $this->encrypt->decode($row->password);
                    if($password == $store_pword){  
                        $this->session->set_userdata('id', $row->user_id);
                        $this->session->set_userdata('uname', $row->user_name); 
                        $this->session->set_userdata('type', $row->user_role_id);
                        return true;
                    }
                    else{
                        return false; 
                    }
                }  
                
            }
            else{
                return false;
            }
        }

    }


?>