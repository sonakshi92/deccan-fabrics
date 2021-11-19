<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->helper('form');
    }

    public function index()
	{
		$data['title'] = "Stocks | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('stock/index');
		$this->load->view('includes/footer');
    }

    public function balance()
	{
		$data['title'] = "Stock Balance | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('stock/balance');
		$this->load->view('includes/footer');
    }

	public function missing()
	{
		$data['title'] = "Missing Stock | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('stock/missing');
		$this->load->view('includes/footer');
    }
	
	public function vendor()
	{
		$data['title'] = "Vendor | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('stock/vendor');
		$this->load->view('includes/footer');
    }

	public function itemMaster()
	{
		$data['title'] = "Item Master | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('stock/itemMaster');
		$this->load->view('includes/footer');
    }

	public function inward()
	{
		$data['title'] = "purchases | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('stock/purchases');
		$this->load->view('includes/footer');
    }
	
	public function purchaseDetails()
	{
		$data['title'] = "Purchase Details | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('stock/viewPurchases');
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

	public function outwardDetails()
	{
		$data['title'] = "Outwards Details | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('stock/viewoutwards');
		$this->load->view('includes/footer');
    }

	public function payments()
	{
		$data['title'] = "Goods Payments | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('stock/payments');
		$this->load->view('includes/footer');
    }

	
	public function yearEnd()
	{
		$data['title'] = "Year End | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('stock/yearEnd');
		$this->load->view('includes/footer');
    }
}
?>