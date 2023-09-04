<?php
Class Model_jenis extends CI_Model {

	function getData(){
		
        $this->db->from('jenis');
        $this->db->order_by('id_jenis', 'DESC');
		$r = $this->db->get();
		return $r->result();
	}
	function insertData(){
		$result = "";
		
	
		$data = array(
		   'nama_jenis' => $this->input->post('nama_jenis')
		);

		$exe = $this->db->insert('jenis', $data); 
		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}

	

	function updateData(){
		$result = "";
		$data = array(
		   'nama_jenis' => $this->input->post('nama_jenis')
		);

		$this->db->where("id_jenis", $this->uri->segment(3));
		$exe = $this->db->update('jenis', $data);
		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}


	function deleteData(){
		$result = "";

		$this->db->where("id_jenis", $this->uri->segment(3));
		$exe = $this->db->delete('jenis');
		if($exe){
			$result = "berhasil";
		}

		return $result;
	}

}