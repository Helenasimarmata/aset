<?php
Class Model_mahasiswa extends CI_Model {

	function getData(){
		
        $this->db->from('mahasiswa');
        $this->db->order_by('id_mahasiswa', 'DESC');
		$r = $this->db->get();
		return $r->result();
	}
	function getDataMahasiswa(){
		

		

			$this->db->from('mahasiswa');
        $this->db->where("mahasiswa.username",$this->session->userdata('username'));
		$r = $this->db->get();
		return $r->result();
		

        
	}
	function insertData(){
		$result = "";
		
	
		$data = array(
		   'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
		   'no_seri' => $this->input->post('no_seri'),
		   'merk' => $this->input->post('merk'),
		   'tahun' => $this->input->post('tahun'),
		   'status_barang' => 'Baik'
		);

		$exe = $this->db->insert('mahasiswa', $data); 
		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}

	

	function updateData(){
		$result = "";
		$data = array(
		   'npm' => $this->input->post('npm'),
		   'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
		   'fakultas' => $this->input->post('fakultas'),
		   'jurusan' => $this->input->post('jurusan'),
		   'jk' => $this->input->post('jk'),
		   'no_hp' => $this->input->post('no_hp'),
		   'email' => $this->input->post('email')
		);

		$this->db->where("username", $this->session->userdata('username'));
		$exe = $this->db->update('mahasiswa', $data);
		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}


	function deleteData(){
		$result = "";

		$this->db->where("id_mahasiswa", $this->uri->segment(3));
		$exe = $this->db->delete('mahasiswa');
		if($exe){
			$result = "berhasil";
		}

		return $result;
	}

}