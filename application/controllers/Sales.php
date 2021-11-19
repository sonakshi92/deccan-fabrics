<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->helper('form');
    }
   
	public function daily()
	{
		$data['title'] = "Daily Sales | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('sales/daily');
		$this->load->view('includes/footer');
    }

	public function monthly()
	{
		$data['title'] = "Monthly sales | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('sales/monthly');
		$this->load->view('includes/footer');
    }

	public function yearly()
	{
		$data['title'] = "Yearly Sales | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('sales/yearly');
		$this->load->view('includes/footer');
    }

    public function custom()
	{
		$data['title'] = "Custom Report | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('sales/custom');
		$this->load->view('includes/footer');
    }
}
?>