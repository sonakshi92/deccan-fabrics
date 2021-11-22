<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('Shopper_model');
        $this->load->helper("security");
        $this->load->helper('date');
		if(!($this->session->autenticated || $this->session->check)){
			$this->session->set_flashdata('message', 'Please Login First');
			redirect('login');
		   }
    } 
	
	public function signup()
	{
		$data['title'] = "Admin Sign up";
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('username', 'Username', 'trim|is_unique[authentication.username]|required|min_length[6]|max_length[12]');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[authentication.email]');
		$this->form_validation->set_rules('password', 'password', 'required|min_length[8]');
		$this->form_validation->set_rules('passconf', 'confirm password', 'required|matches[password]');
		$this->form_validation->set_rules('phone', 'phone', 'required|exact_length[10]');
		//|regex_match[/^[0-9]{10}$/]
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		if($this->form_validation->run() == FALSE){
			$this->load->view('includes/header', $data);
			$this->load->view('includes/sidebar');
			$this->load->view('home/signUp');
			$this->load->view('includes/footer');
		} else{
		//echo'<pre>'; print_r($_POST); 
		$admindata = array(
			'name' => $this->input->post('name', TRUE),
			'username' => $this->input->post('username', TRUE),
			'email' => $this->input->post('email', TRUE),
			'password' => md5($this->input->post('password', TRUE)),
			'phone' => $this->input->post('phone', TRUE),
			'created_at' => date('Y-m-d H:i:s', time()),
		);
		$this->Shopper_model->signup($admindata);
		$this->session->set_flashdata('message', 'Registration of New Admin is successful');
		redirect('home/dashboard');
		}
	}

	public function dayopen()
	{
		redirect('home/dashboard');
    }

	public function dayclose()
	{
		redirect('home/logout');
    }

	public function dashboard()
	{
		$data['title'] = "Dashboard | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('home/dashboard');
		$this->load->view('includes/footer');
    }

	public function backup()
	{
		$data['title'] = "Backup | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('home/backup');
		$this->load->view('includes/footer');
    }

	public function profile()
	{
		$data['title'] = "Profile | Deccan Fabrics";
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar');
		$this->load->view('home/profile');
		$this->load->view('includes/footer');
    }
}
?>