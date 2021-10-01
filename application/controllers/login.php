<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
	
	public function index()
	{
        if(isset($_SESSION['login_id']))
            redirect(base_url());
		$this->load->view('login');
    }

    public function login()
	{
		$this->load->view('login');
	}

    public function check_login(){  
		$shoppername=$this->input->post('shoppername');
		$password=$this->input->post('upassword');

        $res=$this->Login_model->islogin($email, $password);  

        if($res){     
           echo base_url()."shopper/dashboard/";  
        }  
        else{  
           echo ;  
        }   
    } 
   
    
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
   
}
