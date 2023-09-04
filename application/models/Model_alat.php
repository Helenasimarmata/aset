<?php
Class Model_alat extends CI_Model {

	function getData(){
		
        $this->db->from('alat');
        $this->db->order_by('id_alat', 'DESC');
		$r = $this->db->get();
		return $r->result();
	}
	function insertData(){
		$result = "";
		
	
		$data = array(
		   'nama_alat' => $this->input->post('nama_alat'),
		   'no_seri' => $this->input->post('no_seri'),
		   'status_barang' => 'Ada'
		);

		$exe = $this->db->insert('alat', $data); 
		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}

	

	function updateData(){
		$result = "";
		$data = array(
		   'nama_alat' => $this->input->post('nama_alat'),
		   'no_seri' => $this->input->post('no_seri'),
		   'status_barang' => 'Ada'
		);

		$this->db->where("id_alat", $this->uri->segment(3));
		$exe = $this->db->update('alat', $data);
		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}


	function deleteData(){
		$result = "";

		$this->db->where("id_alat", $this->uri->segment(3));
		$exe = $this->db->delete('alat');
		if($exe){
			$result = "berhasil";
		}

		return $result;
	}

}