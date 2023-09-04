<?php
Class Model_kuisioner extends CI_Model {

	function getData(){


		if($this->session->userdata('level')==('admin')){
			$this->db->from('kuisioner');
        $this->db->order_by('id_kuisioner', 'DESC');
		$r = $this->db->get();
		return $r->result();
		} else{

			$this->db->from('kuisioner');
        $this->db->order_by('id_kuisioner', 'DESC');
        $this->db->where("username",$this->session->userdata('username'));
		$r = $this->db->get();
		return $r->result();
		}
		
        
	}
	function getDataKuisioner(){
		
        $this->db->from('kuisioner');
        $this->db->order_by('id_kuisioner', 'DESC');
        $this->db->where("id_kuisioner", $this->uri->segment(3));
		$r = $this->db->get();
		return $r->result();
	}
	function insertData(){
		$result = "";
		
	
		$data = array(
		   'username' => $this->session->userdata('username'),
		   'email' => $this->input->post('email'),
		   'nama_lengkap' => $this->input->post('nama_lengkap'),
		   'tempat_lahir' => $this->input->post('tempat_lahir'),
		   'tgl_lahir' => $this->input->post('tgl_lahir'),
		   'jurusan' => $this->input->post('jurusan'),
		   'prodi' => $this->input->post('prodi'),
		   'semester' => $this->input->post('semester'),
		   'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
		   'rekomendasi' => $this->input->post('rekomendasi'),
		   'status' => $this->input->post('status'),
		   'no_hp' => $this->input->post('no_hp'),
		   'status_perkawinan' => $this->input->post('status_perkawinan'),
		   'alamat' => $this->input->post('alamat'),
		   'jenis_layanan' => $this->input->post('jenis_layanan'),
		   'bentuk_layanan' => $this->input->post('soal1'),
		   'soal1' => $this->input->post('soal1'),
		   'soal2' => $this->input->post('soal2'),
		   'soal3' => $this->input->post('soal3'),
		   'soal4' => $this->input->post('soal4'),
		   'soal5' => $this->input->post('soal5'),
		   'soal6' => $this->input->post('soal6'),
		   'jadwal' => $this->input->post('jadwal'),
		   'hal_lain' => $this->input->post('hal_lain'),
		   'ppsdm' => $this->input->post('ppsdm'),
		   'media' => $this->input->post('media'),
		   'baca' => 'D',
		   'keterangan' => 'Validasi'
		);

		$exe = $this->db->insert('kuisioner', $data); 
		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}

	function accData(){
		$result = "";
		$date = date('Y-m-d');
		$data = array(
		   'keterangan' => 'Disetujui'
		);

		

		$this->db->where("id_kuisioner", $this->uri->segment(3));
		$exe = $this->db->update('kuisioner', $data);

		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}
	function tolakData(){
		$result = "";
		$date = date('Y-m-d');
		$data = array(
		   'keterangan' => 'Ditolak'
		);


		$this->db->where("id_kuisioner", $this->uri->segment(3));
		$exe = $this->db->update('kuisioner', $data);
		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}

	function updateData(){
		$result = "";
		$data = array(
		   'nama_kuisioner' => $this->input->post('nama_kuisioner'),
		   'no_seri' => $this->input->post('no_seri'),
		   'merk' => $this->input->post('merk'),
		   'tahun' => $this->input->post('tahun')
		);

		$this->db->where("id_kuisioner", $this->uri->segment(3));
		$exe = $this->db->update('kuisioner', $data);
		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}


	function deleteData(){
		$result = "";

		$this->db->where("id_kuisioner", $this->uri->segment(3));
		$exe = $this->db->delete('kuisioner');
		if($exe){
			$result = "berhasil";
		}

		return $result;
	}

}