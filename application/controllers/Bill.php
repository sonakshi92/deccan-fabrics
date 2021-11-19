<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bill extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->helper('form');
    }

    public function index()
	{
		$data['title'] = "New billing | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('bills/billing');
		$this->load->view('includes/footer');
    }

	public function exchange()
	{
		$data['title'] = "Exchange | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('bills/exchange');
		$this->load->view('includes/footer');
    }

	public function void()
	{
		$data['title'] = "Void | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('bills/void');
		$this->load->view('includes/footer');
    }

	public function return()
	{
		$data['title'] = "Return via Stock | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('bills/return');
		$this->load->view('includes/footer');
    }
}
?>