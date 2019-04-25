<?php

class list_controller extends CI_Controller{
    public function __construct()
	{
        parent::__construct();

     
      
    }
    public function shows()
{
        $this->load->model('list_model');
        $data['user'] = $this->list_model->show();
        $data['title'] = 'News archive';
        
        $this->load->view('templet/header');
        $this->load->view('pages/list',$data);
        $this->load->view('templet/footer');
}
    public function settings()
    {
        $this->load->model('box_model');
        $data['box']= $this->box_model->show();
        $this->load->view('templet/header');
        $this->load->view('pages/recept/receipt_control',$data);
        $this->load->view('templet/footer');

    }
}