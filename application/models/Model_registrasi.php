<?php
Class Model_registrasi extends CI_Model {

	
	function insertData(){
		$result = "";
		
	
		$data = array(
		   'npm' => $this->input->post('npm'),
		   'username' => $this->input->post('username'),
		   'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
		   'fakultas' => $this->input->post('fakultas'),
		   'jurusan' => $this->input->post('jurusan'),
		   'jk' => $this->input->post('jk'),
		   'no_hp' => $this->input->post('no_hp'),
		   'email' => $this->input->post('email')
		);

		$pass = $this->input->post('password');
		$password = md5($pass);
		$data2 = array(
		   'username' => $this->input->post('username'),
		   'password' => $password,
		   'level'=>'Mahasiswa'
		);
		$exe = $this->db->insert('mahasiswa', $data); 
		$exe2 = $this->db->insert('user', $data2); 
		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}

	

	

}