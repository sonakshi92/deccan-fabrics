<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('Shopper_model');
        $this->load->helper("security");
    }
	
	public function index()
	{
	if( $this->session->autenticated){
		$this->session->set_flashdata('message', 'Already Logged in');
		redirect('home/dashboard');
		}else{
			$data['title'] = "Login | Deccan Fabrics";
			$this->form_validation->set_rules('username', 'User Name', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if($this->form_validation->run() == false)
			{
			  $this->load->view('includes/header', $data);
			  $this->load->view('login');
			  $this->load->view('includes/footer');
			}else{
				$user = $this->security->xss_clean($this->input->post('username'));
				$password = $this->security->xss_clean($this->input->post('password'));
				$admin = $this->Shopper_model->login($user, $password);
				if($admin){
					$admindata = array(
						'id' => $admin->id,
						'name' =>$admin->username,
						'autenticated' => TRUE
					);
					$this->session->set_userdata($admindata);
					$this->session->set_flashdata('message', 'Login is successfull');
					redirect('home/dashboard');
				}else{
					$this->session->set_flashdata('message', 'Invalid email or password');
					redirect('login');
				}
			}
		}
    }

	public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
?>