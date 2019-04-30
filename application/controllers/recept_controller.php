<?php 
class recept_controller extends CI_Controller{
    public function __construct()
	{
        parent::__construct();

       
      
    }
    public function create(){
        $this->load->view('pages/recept/add_recept');
    }
    
    public function create_add_catch() {
        $this->load->view('pages/catch/add_catch');
    }

    public function not_apprvel_recept(){
        $this->load->model('list_model');
        $data['user'] = $this->list_model->show();
        $this->load->view('pages/recept/notaccept',$data);
    }
    public function create_box(){
        $boxname = $this->input->post('box_name');
        $this->load->model('box_model');
        $create = $this->box_model->create($boxname);
        if($create){
         $data['succ']="لقد تم اضافة الصندوق بنجاح";
        $this->load->model('box_model');
        $data['box']= $this->box_model->show();
        $this->load->view('templet/header');
        $this->load->view('pages/recept/receipt_control',$data);
        $this->load->view('templet/footer');
           
        }else{
            $data['error']="خطأ لا يمكن حفظ  الصندوق";
            $this->load->model('box_model');
        $data['box']= $this->box_model->show();
        $this->load->view('templet/header');
        $this->load->view('pages/recept/receipt_control',$data);
        $this->load->view('templet/footer');
        }
        
    }
}

    

   