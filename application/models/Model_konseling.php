<?php
Class Model_konseling extends CI_Model {

	function getData(){


		if($this->session->userdata('level')==('admin')){
			$this->db->from('konseling');
        $this->db->join('mahasiswa','mahasiswa.username=konseling.username');
        $this->db->order_by('id_konseling', 'DESC');
		$r = $this->db->get();
		return $r->result();
		} else{

			$this->db->from('konseling');
        $this->db->join('mahasiswa','mahasiswa.username=konseling.username');
        $this->db->where("mahasiswa.username",$this->session->userdata('username'));
        $this->db->order_by('id_konseling', 'DESC');
		$r = $this->db->get();
		return $r->result();
		}
		
        
	}
	function getDataDetail(){
		
		$id = $this->uri->segment(3);
        $this->db->from('konseling');
        $this->db->where("id_konseling", $id);
		$r = $this->db->get();
		return $r->result();
	}
	function getDataPertanyaan(){
		
        $this->db->from('pertanyaan');
        $this->db->order_by('id_pertanyaan', 'ASC');
		$r = $this->db->get();
		return $r->result();
	}
	function insertData(){
		$result = "";
		
		$date = date('Y-m-d');
		$data = array(
		   'username' => $this->session->userdata('username'),
		   'tanggal_konsul' => $date
		);

		$exe = $this->db->insert('konseling', $data); 
		$insert_id = $this->db->insert_id();

		$jumlah = $this->input->post('id');
		$nilai = $this->input->post('nilai');
		$n = count($jumlah);
		for($ii=0; $ii < $n ; $ii++){
				$insert_data[] = array(
                'id_konseling' => $insert_id,
                'id_pertanyaan'=> $jumlah[$ii],
                'nilai'=> $nilai[$ii]

              );
		}
		$this->db->insert_batch('detail_konseling',$insert_data);


		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}

	

	function updateData(){
		$result = "";
		$data = array(
		   'nama_konseling' => $this->input->post('nama_konseling'),
		   'no_seri' => $this->input->post('no_seri'),
		   'merk' => $this->input->post('merk'),
		   'tahun' => $this->input->post('tahun')
		);

		$this->db->where("id_konseling", $this->uri->segment(3));
		$exe = $this->db->update('konseling', $data);
		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}


	function deleteData(){
		$result = "";

		$this->db->where("id_konseling", $this->uri->segment(3));
		$exe = $this->db->delete('konseling');
		$this->db->where("id_konseling", $this->uri->segment(3));
		$exe2 = $this->db->delete('detail_konseling');



		if($exe){
			$result = "berhasil";
		}

		return $result;
	}

}