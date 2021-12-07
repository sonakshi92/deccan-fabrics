<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

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
		$data['title'] = "Accounts | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('accounts/view');
		$this->load->view('includes/footer');
    }

	public function cashbook()
	{
		$data['title'] = "Cash Book | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('accounts/cashbook');
		$this->load->view('includes/footer');
    }

	public function monthlybook()
	{
		$data['title'] = "Monthly Book | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('accounts/monthlybook');
		$this->load->view('includes/footer');
    }

	public function yearlybook()
	{
		$data['title'] = "Yearly Book | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('accounts/yearlybook');
		$this->load->view('includes/footer');
    }

	public function details()
	{
		$data['title'] = "Cash Book | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('accounts/details');
		$this->load->view('includes/footer');
    }

    
	public function documents()
	{
		$data['title'] = "Documents | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('accounts/documents');
		$this->load->view('includes/footer');
    }

	public function addbank()
	{
		$data['title'] = "Add Bank Details | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('accounts/addbank');
		$this->load->view('includes/footer');
    }

	public function bankdetails()
	{
		$data['title'] = "Bank Details | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('accounts/bankdetails');
		$this->load->view('includes/footer');
    }

	public function payments()
	{
		$data['title'] = "Payment Details | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('accounts/payments');
		$this->load->view('includes/footer');
    }

	public function investment()
	{
		$data['title'] = "Investment | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('accounts/investment');
		$this->load->view('includes/footer');
    }
}
?>