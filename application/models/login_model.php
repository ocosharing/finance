<?php
class login_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
     public function login($email , $password){
        if($email && $password) {
			
			$sql = "SELECT * FROM iftar.user where user_id=".$email." and user_password= ".$password.";";
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
