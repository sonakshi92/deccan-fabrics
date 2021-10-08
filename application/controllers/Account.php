<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->helper('form');
    }

    public function index()
	{
		$data['title'] = "Accounts | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('accounts/view');
		$this->load->view('includes/footer');
    }

	public function cashbook()
	{
		$data['title'] = "Cash Book | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('accounts/cashbook');
		$this->load->view('includes/footer');
    }

	public function details()
	{
		$data['title'] = "Cash Book | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('accounts/details');
		$this->load->view('includes/footer');
    }

    public function payments()
	{
		$data['title'] = "Accounts | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('accounts/paid');
		$this->load->view('accounts/pending');
		$this->load->view('includes/footer');
    }

	public function savedocument()
	{
		$data['title'] = "Documents | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('accounts/documents');
		$this->load->view('includes/footer');
    }

	public function addbank()
	{
		$data['title'] = "Add Bank Details | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('accounts/addbank');
		$this->load->view('includes/footer');
    }

	public function editbank()
	{
		$data['title'] = "Edit Bank Details | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('accounts/editbank');
		$this->load->view('includes/footer');
    }

	public function deletebank()
	{
		
    }

	public function paidpayments()
	{
		$data['title'] = "Paid Payments | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('account/paid');
		$this->load->view('includes/footer');
		
    }

	public function pendingpayments()
	{
		$data['title'] = "Pending Payments | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('account/pending');
		$this->load->view('includes/footer');
		
    }

}
?>