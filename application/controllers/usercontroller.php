<?php

class usercontroller extends CI_Controller{
    public function __construct()
	{
        parent::__construct();

     
      
    }
    public function list()
{
        $this->load->model('list_model');
        $data['user'] = $this->list_model->show();
        $data['title'] = 'News archive';
        
        $this->load->view('templet/header');
        $this->load->view('pages/user/userview',$data);
        $this->load->view('templet/footer');
}
    public function settings()
    {
        $this->load->view('templet/header');
        $this->load->view('pages/recept/receipt_control');
        $this->load->view('templet/footer');

    }
}