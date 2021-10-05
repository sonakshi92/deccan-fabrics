<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bill extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->helper('form');
    }

    public function index()
	{
		$data['title'] = "billing | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('bills/billing');
		$this->load->view('includes/footer');
    }


    public function billing()
	{
		$data['title'] = "billing | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('bills/billing');
		$this->load->view('includes/footer');
    }

	public function exchange()
	{
		$data['title'] = "billing | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('bills/exbill');
		$this->load->view('includes/footer');
    }

	public function void()
	{
		$data['title'] = "billing | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('bills/exbilling');
		$this->load->view('includes/footer');
    }

	public function return()
	{
		$data['title'] = "billing | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('bills/exbilling');
		$this->load->view('includes/footer');
    }
}
?>