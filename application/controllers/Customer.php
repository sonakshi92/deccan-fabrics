<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

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
		$data['title'] = "Customers | Deccan Fabrics";
		$data['allCustomer'] = $this->Shopper_model->getAllDetails('*','customers', array());
		//print_r($data);exit;
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('customers/data');
		$this->load->view('includes/footer');
    }


    public function add()
	{
		$data['title'] = "Add Customer | Deccan Fabrics";
		//$data['allAdmin'] = $this->Shopper_model->viewAdmins();
		$data['country'] = $this->Shopper_model->fetch_country();
	//	print_r($data);exit;
		
			$this->load->view('includes/header', $data);
			$this->load->view('includes/navbar');
			$this->load->view('customers/add');
			$this->load->view('includes/footer');
		// }
			
    }

	public function edit()
	{
		$data['title'] = "Customer Details | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('customers/add');
		$this->load->view('includes/footer');
    }

	
	public function requirement()
	{
		$data['title'] = "Customers Requirement | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('customers/requirement');
		$this->load->view('includes/footer');
    }

	function addToDb()
	{
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[customers.email]');
		$this->form_validation->set_rules('phone','Phone No', 'required|is_unique[customers.phone]');
		if($this->form_validation->run() == FALSE){
			echo validation_errors();
		}else{

		$cust = array(
			'fname' => $this->input->post('fname', TRUE),
			'lname' => $this->input->post('lname', TRUE),
			'email' => $this->input->post('email', TRUE),
			'phone' => $this->input->post('phone', TRUE),
			'created_at' => date('Y-m-d H:i:s', time()),
			);

			$cust_id = $this->Shopper_model->insert_id('customers', $cust);
			$cust_info = array(
				'customer_id' => $cust_id,
				'birthday' => $this->input->post('birthday'),
				'address' => $this->input->post('address', TRUE),
				'landmark' => $this->input->post('landmark', True),
				'city' => $this->input->post('city', True),
				'state' => $this->input->post('state', True),
				'country' => $this->input->post('country', True),
				);
			$custData = $this->Shopper_model->insertAll('customers_info', $cust_info);
			// sleep(3);
			if($custData == TRUE){
				echo 'success';
			}else{
				echo 'failed'; 
			}
		}
	}

	function fetch_state()
	{
		if($this->input->post('country_id')){
			echo $this->Shopper_model->fetch_state($this->input->post('country_id'));
		}
	}

	function fetch_city()
	{
		if($this->input->post('state_id')){
			echo $this->Shopper_model->fetch_city($this->input->post('state_id'));
		}
	}

	
}
?>