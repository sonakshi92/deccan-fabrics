<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->helper('form');
    }

    public function index()
	{
		$data['title'] = "billing | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('customer/view');
		$this->load->view('includes/footer');
    }


    public function addcust()
	{
		$data['title'] = "billing | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('customers/add');
		$this->load->view('includes/footer');
    }

	public function editcust()
	{
		$data['title'] = "billing | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('customer/edit');
		$this->load->view('includes/footer');
    }
}
?>