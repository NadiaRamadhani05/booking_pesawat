<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_m extends CI_Model {

	function tampil_data($table){
		return $this->db->get($table);
	}

	function tampil_data_id($where,$table){
		return $this->db->get_where($table,$where);
	}

	function input_data($data,$table){
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

	function search_data($where,$table){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join('transportation','ON rute.transportation_id = transportation.id');
		$this->db->where($where);
		return $this->db->get();
	}

	function check_login($where,$table){
		return $this->db->get_where($table,$where);
	}
}
