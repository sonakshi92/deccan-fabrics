<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->helper('form');
    }

    public function index()
	{
		$data['title'] = "Stocks | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('stock/balance');
		$this->load->view('includes/footer');
    }


    public function balance()
	{
		$data['title'] = "Stock balance | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('stock/balance');
		$this->load->view('includes/footer');
    }

	public function inward()
	{
		$data['title'] = "billing | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('stock/purchases');
		$this->load->view('includes/footer');
    }

    public function outward()
	{
		$data['title'] = "Goods Outward | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('stock/outward');
		$this->load->view('includes/footer');
    }

	public function paidpayments()
	{
		
    }

	public function pendingpayments()
	{
		
    }
	
}
?>