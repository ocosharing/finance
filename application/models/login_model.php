<?php
class login_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
     public function login($email , $password){
        if($email && $password) {
			
			$sql = "SELECT * FROM sae.user where user_id=".$email." and password= ".$password.";";
			$query = $this->db->query($sql);

			if($query->num_rows() == 1) {
				$result = $query->row_array();

				return $result;
				
			}
			else {
				return false;
			}
		}
     }
}
