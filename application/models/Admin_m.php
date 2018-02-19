<?php 
class Admin_m extends CI_Model{
	function tampil(){
		return $this->db->get('rute')->result();
	}

	function tampil_user(){
		return $this->db->get('user')->result();
	}
}
?>