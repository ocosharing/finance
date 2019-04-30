<?php
class list_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    public function show(){
       
                $query = $this->db->get('user');
                return $query->result_array();
        

        
    }
    public function getuserdata($userid){
       if($userid){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_id', $userid);
        $query = $this->db->get();

        return $query->result_array();


       }
        



}

}