<?php
Class Model_peminjaman_ruang extends CI_Model {

	function getDataRuang(){
		

		if($this->session->userdata('level')==('admin')){
			$this->db->from('peminjaman_ruang');
        $this->db->order_by('id_peminjaman', 'DESC');
        $this->db->join('mahasiswa','mahasiswa.username=peminjaman_ruang.username');
		$r = $this->db->get();
		return $r->result();
		} else{

			$this->db->from('peminjaman_ruang');
        $this->db->order_by('id_peminjaman', 'DESC');
        $this->db->join('mahasiswa','mahasiswa.username=peminjaman_ruang.username');
        $this->db->where("mahasiswa.username",$this->session->userdata('username'));
		$r = $this->db->get();
		return $r->result();
		}

        
	}
	
	function insertDataRuang(){
		$result = "";
		
		$data = array(
		   'username' => $this->session->userdata('username'),
		   'tanggal_pengajuan' => $this->input->post('tanggal'),
		   'tanggal_peminjaman'=> '',
		   'tanggal_kembali'=> '',
		   'tujuan' => $this->input->post('tujuan'),
		   'ruangan' => '',
		   'keterangan' => 'Validasi',
		   'baca' => 'D'
		);

		$exe = $this->db->insert('peminjaman_ruang', $data); 
		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}

	


	function accDataRuang(){
		$result = "";
		$date = date('Y-m-d');
		$data = array(
		   'keterangan' => 'Disetujui',
		   'ruangan' => $this->input->post('ruangan'),
		   'tanggal_peminjaman' => $date
		);

		

		$this->db->where("id_peminjaman", $this->uri->segment(3));
		$exe = $this->db->update('peminjaman_ruang', $data);
		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}
	function kembaliDataRuang(){
		$result = "";
		$date = date('Y-m-d');
		$data = array(
		   'keterangan' => 'Dikembalikan',
		   'tanggal_kembali' => $date
		);

		

		$this->db->where("id_peminjaman", $this->uri->segment(3));
		$exe = $this->db->update('peminjaman_ruang', $data);
		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}
	function tolakDataRuang(){
		$result = "";
		$date = date('Y-m-d');
		$data = array(
		   'keterangan' => 'Ditolak'
		);


		$this->db->where("id_peminjaman", $this->uri->segment(3));
		$exe = $this->db->update('peminjaman_ruang', $data);
		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}


	function deleteDataRuang(){
		$result = "";

		$this->db->where("id_peminjaman", $this->uri->segment(3));
		$exe = $this->db->delete('peminjaman_ruang');
		if($exe){
			$result = "berhasil";
		}

		return $result;
	}

}