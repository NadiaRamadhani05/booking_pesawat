<?php 
 
class Admin extends CI_Controller{

	public function index()
	{
		$this->load->view('Admin_v');
	}
 
	function __construct(){
		parent::__construct();
		$this->load->model('data_m');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	public function rute(){
		$data['rute']=$this->data_m->tampil_data('rute')->result();
		$this->load->view('Rute_v', $data);
	}

	public function form_rute(){
		$data['rute'] = null;
		$this->load->view('form_rute',$data);
	}

	public function editrute(){
		$this->load->view('Editrute_v');
	}

	function user(){
		$data['user']=$this->data_m->tampil_data('user')->result();
		$this->load->view('User_v', $data);
	}

	public function form_user(){
		$data['user'] = null;
		$this->load->view('form_user',$data);
	}

	public function edit_data_user($id){
		$where = array('id' => $id);
		$data['user'] = $this->data_m->tampil_data_id($where,'user')->result();
		$this->load->view('form_user',$data);
	}

	public function customer()
	{
		$data['customer'] = $this->data_m->tampil_data('customer')->result();
		$this->load->view('customer',$data);
	}

	function tambahuser(){
		$this->load->view('Tambahuser_v');
	}

	public function transportation()
	{
		$data['transportation'] = $this->data_m->tampil_data('transportation_v')->result();
		$this->load->view('transportation',$data);
	}

	public function form_transportation(){
		$data['transportation'] = null;
		$this->load->view('form_transportation',$data);
	}

	public function edit_data_transportation($id){
		$where = array('id' => $id);
		$data['transportation'] = $this->data_m->tampil_data_id($where,'transportation_v')->result();
		$this->load->view('form_transportation',$data);
	}



}