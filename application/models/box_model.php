<?php
class box_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    public function create($Box_name){
         if($Box_name){
                $this->db->set('rec_type_name', $Box_name);
                $create = $this->db->insert('receipt_type');
                return ($create == true ) ? true : false;
               }
    }
    public function show(){
        $query = $this->db->get('receipt_type');
                return $query->result_array();
        

    }

}