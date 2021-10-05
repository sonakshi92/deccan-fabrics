<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->helper('form');
    }
	
	public function index()
	{
		$data['title'] = "Login | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/header', $data);
		$this->load->view('login');
		$this->load->view('includes/footer');
    }

	public function home()
	{
		$data['title'] = "Home | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('home');
		$this->load->view('includes/footer');
    }

	

	public function dashboard()
	{
		$data['title'] = "dashboard | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('dashboard');
		$this->load->view('includes/footer');
    }

   
}
?>