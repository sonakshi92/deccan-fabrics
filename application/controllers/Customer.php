<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

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
		$data['title'] = "Customers | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('customers/data');
		$this->load->view('includes/footer');
    }


    public function add()
	{
		$data['title'] = "Customer Details | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('customers/add');
		$this->load->view('includes/footer');
    }

	public function edit()
	{
		$data['title'] = "Customer Details | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('customers/add');
		$this->load->view('includes/footer');
    }

	public function requirement()
	{
		$data['title'] = "Customers Requirement | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('customers/requirement');
		$this->load->view('includes/footer');
    }
}
?>