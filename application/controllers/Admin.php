<?php 
 
class Admin extends CI_Controller{

	public function index()
	{
		$this->load->view('Admin_v');
	}
 
	function __construct(){
		parent::__construct();
		$this->load->model('Admin_m');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function rute(){
		$data['rute']=$this->Admin_m->tampil();
		$this->load->view('Rute_v', $data);
	}

	function tambahrute(){
		$this->load->view('Tambahrute_v');
	}

	function editrute(){
		$this->load->view('Editrute_v');
	}

	function user(){
		$data['user']=$this->Admin_m->tampil_user();
		$this->load->view('User_v', $data);
	}

	function tambahuser(){
		$this->load->view('Tambahuser_v');
	}


}