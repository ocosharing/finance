<?php
class login_con extends CI_Controller 
{
    
	public function __construct()
	{
        parent::__construct();

    }
    public function index(){
        $this->load->view('templet/header');
        $this->load->view('pages/home');
      
        $data['check']= false;
    }
    public function login()
	{
        $this->load->model('login_model');
       
        $login = $this->login_model->login($this->input->post('id') , $this->input->post('pass'));

        if($login) {
        
          redirect('dashborde', 'refresh');
        }
        else
         {
            $data['errors'] = 'Incorrect username/password combination';
            $this->load->view('templet/header');
            $this->load->view('pages/home',$data);
           
            $data['check']=false;
        }	
    }
    //logot fucation 
    public function logout(){
        $this->session->sess_destroy();
        $data['check']=false;
		redirect('login_con/index', 'refresh');
    }
}
