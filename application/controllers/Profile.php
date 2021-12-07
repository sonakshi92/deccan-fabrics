<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->helper('form');
		if(!($this->session->autenticated || $this->session->check)){
			$this->session->set_flashdata('message', 'Please Login First');
			redirect('login');
		   }
    }

    public function index()
	{
		$data['title'] = "profile | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('profile');
		$this->load->view('includes/footer');
    }


    public function dayopen()
	{
		
    }

	public function dayclose()
	{
		
    }
    
    public function tasks()
	{
		$data['title'] = "Tasks | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('calender/calendar');
		$this->load->view('includes/footer');
    }
	
	public function todolist()
	{
		$data['title'] = "Tasks | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('calendar/todolist');
		$this->load->view('includes/footer');
    }
}
?>