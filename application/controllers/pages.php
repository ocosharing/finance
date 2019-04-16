<?php
    class Pages extends CI_Controller{
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			
		    $date["title"]=ucfirst($page);
            $this->load->view('templet/header');
            $this->load->view('pages/'.$page,$date);
            $this->load->view('templet/footer');


        }
    }

