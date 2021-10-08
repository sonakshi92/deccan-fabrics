<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->helper('form');
    }

    public function index()
	{
		$data['title'] = "Employees | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('employees/data');
		$this->load->view('includes/footer');
    }


    public function add()
	{
		$data['title'] = "Add Customer | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('employees/add');
		$this->load->view('includes/footer');
    }

	public function edit()
	{
		$data['title'] = "Edit Customer | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('employees/edit');
		$this->load->view('includes/footer');
    }

	public function salaries()
	{
		$data['title'] = "employees Requests | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('employees/salaries');
		$this->load->view('includes/footer');
    }
}
?>