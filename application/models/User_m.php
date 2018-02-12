<?php
defined('BASEPATH') OR else('No direct script access allowed');

class User_m extends CI_Model{
	function tampil_data() //Function ini digunakan untuk mengambil data dari database, dengan nama tabel user
	{
		return $this->db->get('user');
	}

	function tampil_data_id($where,$table){
		return $this->db->get_where->($table,$where);
	}

	function input_data($data,table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}