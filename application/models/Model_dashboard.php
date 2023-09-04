<?php
Class Model_dashboard extends CI_Model {

	function getDataUser(){
		
		$query = $this->db->query("SELECT 
		*, COUNT(id_user) as id FROM `user`");

		return $query->result();
	}

	function getDataAlat(){
		
		$query = $this->db->query("SELECT 
		*, COUNT(id_alat) as id FROM `alat`");

		return $query->result();
	}
	function getDataMahasiswa(){
		
		$query = $this->db->query("SELECT 
		*, COUNT(id_mahasiswa) as id FROM `mahasiswa`");

		return $query->result();
	}
	function getDataProfil(){
			
		$username = $this->session->userdata('username');
		$query = $this->db->query("SELECT * FROM `mahasiswa` where username='$username'");

		return $query->result();
	}

	function getDataPeminjaman(){
		
		$query = $this->db->query("SELECT 
		*, COUNT(id_peminjaman) as id FROM `peminjaman`");

		return $query->result();
	}

}