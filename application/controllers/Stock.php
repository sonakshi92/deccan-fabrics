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
		$data['title'] = "Stocks Details | Deccan Fabrics";
		$data['brand'] = $this->Shopper_model->fetch('brands', 'name');
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('stock/index');
		$this->load->view('includes/footer');
    }

	public function addbrand(){
		$this->form_validation->set_rules('brand_name', 'Brand', 'is_unique[brands.name]|max_length[20]');
		// $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		if($this->form_validation->run() == FALSE){
			echo validation_errors();
		}else{
			$add_brand = array('name' => $this->input->post('brand_name', TRUE));
			// print_r($addb); exit;
			$add = $this->Shopper_model->insertAll('brands', $add_brand);
			if($add == TRUE){
				echo 'success';
			}else{
				echo 'failed'; 
			}
		}
	}

	public function addCat(){
		// print_r($_POST); exit;
		$brand = implode(',', $this->input->post('brand_id', TRUE));
		$add_category = array(
			'name' => $this->input->post('category_name', TRUE),
			'brand_id' => $brand
			);
		// print_r($add_category); exit;
		$addCat = $this->Shopper_model->insertAll('categories', $add_category);
		if($addCat == TRUE){
			echo 'success';
		}
	}
	

    public function balance()
	{
		$data['title'] = "Stock Balance | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('stock/balance');
		$this->load->view('includes/footer');
    }

	public function missing()
	{
		$data['title'] = "Missing Stock | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('stock/missing');
		$this->load->view('includes/footer');
    }
	
	public function vendor()
	{
		$data['title'] = "Vendor | Deccan Fabrics";
		$this->form_validation->set_rules('code', 'Vendor Code', 'trim|max_length[6]');
		$this->form_validation->set_rules('name', 'Name', 'trim|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('address', 'Address', 'trim');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		$this->form_validation->set_rules('gst', 'GST', 'trim|required');
		$this->form_validation->set_rules('type', 'Type', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
		if($this->form_validation->run() == FALSE){
			$this->load->view('includes/header', $data);
			$this->load->view('includes/navbar');
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
		$data['brand'] = $this->Shopper_model->fetch('brands', 'name');
		$data['products'] = $this->Shopper_model->fetch('inventory', 'id');
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('stock/itemMaster');
		$this->load->view('includes/footer');
    }
	function fetch_cat()
	{
		//print_r($_POST);exit;
		if($this->input->post('brand_id')){
			echo $this->Shopper_model->fetchByID($this->input->post('brand_id'), 'categories', 'brand_id');
		}
	}
	function addToDb()
	{
		// print_r($_POST); exit;
		$this->form_validation->set_rules('stock', 'Stock No.', 'trim|max_length[10]');
		$this->form_validation->set_rules('quality', 'Quality', 'trim|max_length[20]');
		if($this->form_validation->run() == FALSE){
			echo validation_errors();
		}else{

		$items = array(
			'stock' => $this->input->post('stock', TRUE),
			'quality' => $this->input->post('quality', TRUE),
			'brand' => $this->input->post('brand', TRUE),
			'category' => $this->input->post('category', TRUE),
			'retail' => $this->input->post('retail'),
			'purchase' => $this->input->post('purchase', TRUE),
			'description' => $this->input->post('description', True),
			'tax' => $this->input->post('tax', True),
			'lsq' => $this->input->post('lsq', True),
			'hsn' => $this->input->post('hsn', True),
			'created_at' => date('Y-m-d H:i:s', time()),
			);
			sleep(3);

			$insert = $this->Shopper_model->insertAll('inventory', $items);
			if($insert == TRUE){
				echo 'success';
			}else{
				echo 'failed'; 
			}
		}
	}

	public function inward()
	{
		$data['title'] = "purchases | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('stock/purchases');
		$this->load->view('includes/footer');
    }
	
	public function purchaseDetails()
	{
		$data['title'] = "Purchase Details | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('stock/viewPurchases');
		$this->load->view('includes/footer');
    }


    public function outward()
	{
		$data['title'] = "Goods Outward | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('stock/outward');
		$this->load->view('includes/footer');
    }

	public function outwardDetails()
	{
		$data['title'] = "Outwards Details | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('stock/viewoutwards');
		$this->load->view('includes/footer');
    }

	public function payments()
	{
		$data['title'] = "Goods Payments | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('stock/payments');
		$this->load->view('includes/footer');
    }

	
	public function yearEnd()
	{
		$data['title'] = "Year End | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('stock/yearEnd');
		$this->load->view('includes/footer');
    }
}
?>