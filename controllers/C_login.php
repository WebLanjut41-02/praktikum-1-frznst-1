<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends My_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('arrayan');
		$this->load->helper('form');

	}
	public function index($halaman="login")
	{
		$this->load->view($halaman);
	}


	function cek(){
	$this->form_validation->set_rules('username', 'user', 'trim|required',array('required'=>'Harap isi kolom user'));
	$this->form_validation->set_rules('password', 'pass', 'trim|required',array('required'=>'Harap isi kolom password'));

	if ($this->form_validation->run() == FALSE) {
		$this->index();
	} 
	else {
		# code...

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($username=='admin' && $password=='admin'){

		
			$this->arrayan->insert($username,$password);
			$this->index('list');
		}

		else{
			$this->session->set_flashdata('fail', 'username dan password salah');
			$this->index();
		}
	}	
	}

	public function logout()
	{
		# code...
		$this->session->sess_destroy();
		redirect('C_login/index','refresh');
	}

	public function tambah()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$this->arrayan->insert($user,$pass);
		$this->index('list');

	}


}

/* End of file C_login.php */
/* Location: ./application/controllers/C_login.php */