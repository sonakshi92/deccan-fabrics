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
		$data['allCustomer'] = $this->Shopper_model->allDetails('*','customers', array());
		//print_r($data);exit;
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
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
			$this->load->view('includes/sidebar');
			$this->load->view('customers/add');
			$this->load->view('includes/footer');
		// }
			
    }

	public function edit()
	{
		$data['title'] = "Customer Details | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('customers/add');
		$this->load->view('includes/footer');
    }

	
	public function requirement()
	{
		$data['title'] = "Customers Requirement | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('customers/requirement');
		$this->load->view('includes/footer');
    }

	function addToDb()
	{
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[customers.email]');
		$this->form_validation->set_rules('phone','Phone No', 'required|is_unique[customers.phone]');
		$this->form_validation->set_rules('birthday', 'Date of Birth', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('landmark', 'Landmark', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		if($this->form_validation->run() == FALSE){
			echo validation_errors();
		//$this->add();
		//  $this->load->view('customers/add');
		//  $array = array(
		// 	'error'   => true,
		// 	'fname_error' => form_error('fname'),
		// 	'lname_error' => form_error('lname'),
		// 	'email_error' => form_error('email'),
		// 	'phone_error' => form_error('phone'),
		// 	'birthday_error' => form_error('birthday'),
		// 	'address_error' => form_error('address'),
		// 	'landmark_error' => form_error('landmark')
		// );
		// echo json_encode($array);

		}else{

		$custData = array(
			'fname' => $this->input->post('fname', TRUE),
			'lname' => $this->input->post('lname', TRUE),
			'email' => $this->input->post('email', TRUE),
			'phone' => $this->input->post('phone', TRUE),
			'birthday' => $this->input->post('birthday'),
			'address' => $this->input->post('address', TRUE),
			'landmark' => $this->input->post('landmark', True),
			'city' => $this->input->post('city', True),
			'state' => $this->input->post('state', True),
			'country' => $this->input->post('country', True),
			'created_at' => date('Y-m-d H:i:s', time()),
			);
			sleep(3);

			$insert = $this->Shopper_model->addCust($custData);

			if($insert == TRUE){
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