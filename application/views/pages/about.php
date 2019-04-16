<?php 
 $name= $this->session->userdata('username');
if(isset($name)){
    
  
   echo $name;
}
    ?>