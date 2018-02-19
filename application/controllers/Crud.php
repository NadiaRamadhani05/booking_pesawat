<?php

class Crud extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model('Crud_m');
		$this->load->helper('url');
	}

	function tampil(){
		$data['rute'] = $this->Crud_m->tampil_data()->result();
		$this->load->view('tampil', $data);
	}

	function index() {
		// $this->load->view('v_rute');
	}
	//DATA RUTE
	function tambah_aksi() {
		$from = $this->input->post('from');
		$to = $this->input->post('to');
		$date = $this->input->post('depart');
		$price = $this->input->post('price');

		$data = array(
				'rute_from' => $from,
				'rute_to' => $to,
				'depart_on' => $date,
				'price' => $price
		);
		$this->Crud_m->input_data($data, 'rute');
		redirect('admin/rute');
	}

	function hapus($id){
		$where = array('ruteid' => $id);
		$this->Crud_m->hapus_data($where, 'rute');
		redirect('admin/rute');
	}

	function edit_rute($id){
		$where = array ('ruteid' => $id);
		$data['rute'] = $this->Crud_m->edit_data($where, 'rute')->result();
		$this->load->view('Editrute_v', $data);
	}

	function update_rute(){
		$id = $this->input->post('id');
		$from = $this->input->post('from');
		$to = $this->input->post('to');
		$depart = $this->input->post('depart');
		$price = $this->input->post('price');
		$data = array(
			'rute_from' => $from,
			'rute_to' => $to,
			'depart_on' => $depart,
			'price' => $price
		);
		$where = array(
			'ruteid' => $id
		);
		$this->Crud_m->update_data($where, $data, 'rute');
		redirect('admin/rute');
	}



	//DATA USER

	function tampil_user(){
		$data['user'] = $this->Crud_m->tampil_data_user()->result();
		$this->load->view('User_v', $data);
	}

	function tambah_aksi_user() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$level = $this->input->post('level');

		$data = array(
				'username' => $username,
				'password' => $password,
				'fullname' => $fullname,
				'level' => $level
		);
		$this->m_crud->input_data_user($data, 'user');
		redirect('admin/user');
	}

	function hapus_user($id){
		$where = array('id' => $id);
		$this->m_crud->hapus_data_user($where, 'user');
		redirect('admin/user');
	}

	function edit_user($id){
		$where = array ('id' => $id);
		$data['user'] = $this->Crud_m->edit_data_user($where, 'user')->result();
		$this->load->view('Edituser_v', $data);
	}

	function update_user(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$level = $this->input->post('level');
		$data = array(
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'level' => $level
		);
		$where = array(
			'id' => $id
		);
		$this->Crud_m->update_data_user($where, $data, 'user');
		redirect('admin/user');
	}

}

?>