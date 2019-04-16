<?php
class list_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    public function show(){
       
                $query = $this->db->get('user');
                return $query->result_array();
        

        
    }

}