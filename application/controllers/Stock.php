<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
        $this->load->model('Shopper_model');
        $this->load->helper("security");
        $this->load->helper('date');
		if(!($this->session->autenticated || $this->session->check)){
			$this->session->set_flashdata('message', 'Please Login First');
			redirect('login');
		   }
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
		$this->form_validation->set_rules('code', 'Vendor Code', 'trim|required|max_length[6]');
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('state', 'State', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		$this->form_validation->set_rules('gst', 'GST', 'trim|required');
		$this->form_validation->set_rules('type', 'Type', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
		if($this->form_validation->run() == FALSE){
			$this->load->view('includes/header', $data);
			$this->load->view('includes/sidebar');
			$this->load->view('stock/vendor');
			$this->load->view('includes/footer');
		}else{
			$vendorDetails = array(
				'code' => $this->input->post('code', TRUE),
				'name' => $this->input->post('name', TRUE),
				'address' => $this->input->post('address', TRUE),
				'phone' => $this->input->post('address', TRUE),
				'state' =>$this->input->post('state', TRUE),
				'phone' => $this->input->post('phone'),
				'gst' => $this->input->post('gst', TRUE),
				'type' => $this->input->post('type', TRUE)
			);
			$this->Shopper_model->addVendor($vendorDetails);
			$this->session->set_flashdata('message', 'Vendor Added Successfully');
			redirect('stock/vendor');
		}
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