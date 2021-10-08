<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->helper('form');
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
		$data['title'] = "Add Customer | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('customers/add');
		$this->load->view('includes/footer');
    }

	public function edit()
	{
		$data['title'] = "Edit Customer | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('customers/edit');
		$this->load->view('includes/footer');
    }

	public function request()
	{
		$data['title'] = "Customers Requests | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('customers/request');
		$this->load->view('includes/footer');
    }

	public function viewreq()
	{
		$data['title'] = "Status of Requests | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('customers/view_request.php');
		$this->load->view('includes/footer');
    }
}
?>