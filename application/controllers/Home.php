<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent:: __construct();

		$this->load->model('data_m');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function search($rute_from,$rute_to)
	{
		$where = array(
			'rute_from' => $rute_from,
			'rute_to' => $rute_to
			);
		$table = "rute";
		$data['flight'] = $this->data_m->search_data($where,$table)->result();
		$this->load->view('home_flight',$data);
	}

	public function reservation()
	{
		$this->load->view('home_reservation');
	}

}
