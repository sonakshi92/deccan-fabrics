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

    function login(){
       public function login()
	{
		$this->load->view('login');
	}

    public function check_login(){  
		$email=$this->input->post('uemail');
			$password=$this->input->post('upassword');

        $res=$this->dashboard_model->islogin($email, $password);  

        if($res){     
            $this->session->set_userdata('id',$data['name']);
           echo base_url()."login/dashboard/";              
        }  
        else{  
           $this->session->set_flashdata('message', 'Enter Correct Login details');  
        }   
    } 
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
   
}
