<?php
    class Authentication extends CI_Model{
        public function __construct(){
            $this->load->library('encrypt');
        }

        function can_login($email, $password){
                    
            $query0 = $this->db->get_where('admins', array('Email' => $email));
            $query1 = $this->db->get_where('students', array('Email' => $email));
            $query2 = $this->db->get_where('parents', array('Email' => $email));
            $query3 = $this->db->get_where('teachers', array('Email' => $email));

            if($query0->num_rows() > 0){
                foreach($query0->result() as $row){
                    $store_pword = $this->encrypt->decode($row->Password);
                    if($password == $password){  
                        $this->session->set_userdata('id', $row->AdminID);
                        $this->session->set_userdata('uname', $row->Name);
                        $this->session->set_userdata('schoolCode', $row->SchoolCode); 
                        $this->session->set_userdata('type', $row->UserID);
                        return true;
                    }
                    else{
                        return false; 
                    }
                }  
                
            }
            elseif($query1->num_rows() > 0){
                foreach($query1->result() as $row){
                    $store_pword = $this->encrypt->decode($row->Password);
                    if($password == $password){  
                        $this->session->set_userdata('id', $row->StudentID);
                        $this->session->set_userdata('uname', $row->Name); 
                        $this->session->set_userdata('schoolCode', $row->SchoolCode);
                        $this->session->set_userdata('type', $row->UserID);
                        return true;
                    }
                    else{
                        return false; 
                    }
                }  
                
            }
            elseif($query2->num_rows() > 0){
                foreach($query2->result() as $row){
                    $store_pword = $this->encrypt->decode($row->Password);
                    if($password == $password){  
                        $this->session->set_userdata('id', $row->ParentID);
                        $this->session->set_userdata('uname', $row->Name); 
                        $this->session->set_userdata('studentId', $row->StudentID);
                        $this->session->set_userdata('type', $row->UserID);
                        return true;
                    }
                    else{
                        return false; 
                    }
                }  
                
            }
            elseif($query3->num_rows() > 0){
                foreach($query3->result() as $row){
                    $store_pword = $this->encrypt->decode($row->Password);
                    $status = $row->Status;
                    if($password == $password && $status == true){  
                        $this->session->set_userdata('id', $row->TeacherID);
                        $this->session->set_userdata('uname', $row->Name); 
                        $this->session->set_userdata('schoolCode', $row->SchoolCode);
                        $this->session->set_userdata('type', $row->UserID);
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