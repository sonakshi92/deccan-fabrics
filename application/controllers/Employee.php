<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
        $this->load->model('Shopper_model');
        $this->load->helper("security");
        $this->load->helper('date');if(!($this->session->autenticated || $this->session->check)){
			$this->session->set_flashdata('message', 'Please Login First');
			redirect('login');
		   }
    }

    public function index()
	{
		$data['title'] = "Employees | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('employees/data');
		$this->load->view('includes/footer');
    }


    public function add()
	{
		$data['title'] = "Add Employee | Deccan Fabrics";
		$data['country'] = $this->Shopper_model->fetch_country();
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('employees/add');
		$this->load->view('includes/footer');
    }

	function addemp()
	{
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[employees.email]');
		$this->form_validation->set_rules('phone','Phone No', 'required|is_unique[employees.phone]');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		if($this->form_validation->run() == FALSE){
			echo validation_errors();
		}else{

		$emp = array(
			'fname' => $this->input->post('fname', TRUE),
			'lname' => $this->input->post('lname', TRUE),
			'email' => $this->input->post('email', TRUE),
			'sales_code' => $this->input->post('sales_code', TRUE),
			'phone' => $this->input->post('phone', TRUE),
			'basic_salary' => $this->input->post('basic_salary', TRUE),
			);

			$emp_id = $this->Shopper_model->insert_id('employees', $emp);
			$emp_info = array(
				'emp_id' => $emp_id,
				'email' => $this->input->post('email'),
				'gender' => $this->input->post('gender'),
				'birthday' => $this->input->post('birthday'),
				'address' => $this->input->post('address', TRUE),
				'landmark' => $this->input->post('landmark', True),
				'city' => $this->input->post('city', True),
				'state' => $this->input->post('state', True),
				'country' => $this->input->post('country', True),
				);
			$custData = $this->Shopper_model->insertAll('employees_info', $emp_info);
			// sleep(3);
			if($custData == TRUE){
				echo 'success';
			}else{
				echo 'failed'; 
			}
		}
	}

	public function edit()
	{
		$data['title'] = "Edit Customer | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('employees/edit');
		$this->load->view('includes/footer');
    }

	public function salaries()
	{
		$data['title'] = "employees Requests | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/navbar');
		$this->load->view('employees/salaries');
		$this->load->view('includes/footer');
    }
}
?>