<?php 
class recept_controller extends CI_Controller{
    public function __construct()
	{
        parent::__construct();

       
      
    }
    public function create(){
        $this->load->view('pages/recept/add_recept');
    }
    public function not_apprvel_recept(){
        $this->load->model('list_model');
        $data['user'] = $this->list_model->show();
        $this->load->view('pages/recept/notaccept',$data);
    }
}
   