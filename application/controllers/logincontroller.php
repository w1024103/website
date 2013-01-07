<?php

class LoginController extends CI_Controller{
    public function index(){
        $this->login();
    }
    public function login(){
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('login');
        $this->load->view('footer');
    }

    public function checkLogin(){
        $this->form_validation->set_rules('username' ,'Username','required|valid_email');
        $this->form_validation->set_rules('password' ,'Password','required|callback_verifyUser');
        
        if($this->form_validation->run() == false){
            $this->load->view('login');
        }else{
      redirect(str_replace('https','http',site_url('find/homepage')));
        }
    }
    public function verifyUser(){
        $name = $this->input->post('username');
        $pass = $this->input->post('password');
        $this->load->model('LoginModel');
        if($this->LoginModel->login($name, $pass)){
            return true;
        }else{
            $this->form_validation->set_message('verifyUser','Incorrect Username or Password. Please try again!!');
            return false;
        }
    }
    
    	 public function do_Logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
    
        	 public function do_Login(){
        $this->session->sess_destroy();
        redirect('login');
    }
}
   
    
   
?>
