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
    public function create_box(){
        $boxname = $this->input->post('boxname');
        $this->load->model('box_model');
        $create = $this->box_model->create($boxname);
        if($create){
            $date['succ']="لقد تم اضافة الصندوق بنجاح";
            $this->load->view('pages/recept/receipt_control',$data);
           
        }else{
            $date['error']="خطأ لا يمكن حفظ  الصندوق";
            $this->load->view('pages/recept/receipt_control',$data);
        }
        
    }
}

    

   