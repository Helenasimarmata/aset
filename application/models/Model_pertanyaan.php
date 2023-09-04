<?php
Class Model_pertanyaan extends CI_Model {

	function getData(){
		
        $this->db->from('pertanyaan');
        $this->db->join('jenis','jenis.id_jenis=pertanyaan.id_jenis');
        $this->db->order_by('id_pertanyaan', 'asc');
		$r = $this->db->get();
		return $r->result();
	}
	function getDataJenis(){
		
        $this->db->from('jenis');
        $this->db->order_by('id_jenis', 'DESC');
		$r = $this->db->get();
		return $r->result();
	}
	function insertData(){
		$result = "";
		
	
		$data = array(
			'id_jenis' => $this->input->post('jenis'),
		   'nama_pertanyaan' => $this->input->post('nama_pertanyaan')
		);

		$exe = $this->db->insert('pertanyaan', $data); 
		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}

	

	function updateData(){
		$result = "";
		$data = array(
			'id_jenis' => $this->input->post('jenis'),
		   'nama_pertanyaan' => $this->input->post('nama_pertanyaan')
		);

		$this->db->where("id_pertanyaan", $this->uri->segment(3));
		$exe = $this->db->update('pertanyaan', $data);
		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}


	function deleteData(){
		$result = "";

		$this->db->where("id_pertanyaan", $this->uri->segment(3));
		$exe = $this->db->delete('pertanyaan');
		if($exe){
			$result = "berhasil";
		}

		return $result;
	}

}