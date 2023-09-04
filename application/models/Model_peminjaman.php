<?php
Class Model_peminjaman extends CI_Model {

	function getData(){
		

		if($this->session->userdata('level')==('admin')){
			$this->db->from('peminjaman');
        $this->db->order_by('id_peminjaman', 'DESC');
        $this->db->join('mahasiswa','mahasiswa.username=peminjaman.username');
        $this->db->join('alat','alat.id_alat=peminjaman.id_alat');
		$r = $this->db->get();
		return $r->result();
		} else{

			$this->db->from('peminjaman');
        $this->db->order_by('id_peminjaman', 'DESC');
        $this->db->join('mahasiswa','mahasiswa.username=peminjaman.username');
        $this->db->join('alat','alat.id_alat=peminjaman.id_alat');
        $this->db->where("mahasiswa.username",$this->session->userdata('username'));
		$r = $this->db->get();
		return $r->result();
		}

        
	}
	function getDataAlat(){
		
        $this->db->from('alat');
        $this->db->order_by('id_alat', 'DESC');
        $this->db->where("status_barang", 'Ada');
		$r = $this->db->get();
		return $r->result();
	}
	function insertData(){
		$result = "";
		
		$date = date('Y-m-d');
		$data = array(
		   'username' => $this->session->userdata('username'),
		   'id_alat' => $this->input->post('alat'),
		   'tanggal_pengajuan' => $date,
		   'tanggal_peminjaman'=> '',
		   'tanggal_kembali'=> '',
		   'alasan' => $this->input->post('tujuan'),
		   'keterangan' => 'Validasi',
		   'baca' => 'D'
		);

		$exe = $this->db->insert('peminjaman', $data); 
		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}

	

	function updateData(){
		$result = "";
		$data = array(
		   'nama_peminjaman' => $this->input->post('nama_peminjaman'),
		   'no_seri' => $this->input->post('no_seri'),
		   'merk' => $this->input->post('merk'),
		   'tahun' => $this->input->post('tahun')
		);

		$this->db->where("id_peminjaman", $this->uri->segment(3));
		$exe = $this->db->update('peminjaman', $data);
		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}

	function accData(){
		$result = "";
		$date = date('Y-m-d');
		$data = array(
		   'keterangan' => 'Disetujui',
		   'tanggal_peminjaman' => $date
		);

		$data2 = array(
		   'status_barang' => 'Dipinjam'
		);

		$this->db->where("id_peminjaman", $this->uri->segment(3));
		$exe = $this->db->update('peminjaman', $data);

		$this->db->where("id_alat", $this->uri->segment(4));
		$exe2 = $this->db->update('alat', $data2);
		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}
	function kembaliData(){
		$result = "";
		$date = date('Y-m-d');
		$data = array(
		   'keterangan' => 'Dikembalikan',
		   'tanggal_kembali' => $date
		);

		$data2 = array(
		   'status_barang' => 'Ada'
		);

		$this->db->where("id_peminjaman", $this->uri->segment(3));
		$exe = $this->db->update('peminjaman', $data);
		$this->db->where("id_alat", $this->uri->segment(4));
		$exe2 = $this->db->update('alat', $data2);
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


		$this->db->where("id_peminjaman", $this->uri->segment(3));
		$exe = $this->db->update('peminjaman', $data);
		if($exe){
			$result = "berhasil";
		}
		

		return $result;
	}


	function deleteData(){
		$result = "";

		$this->db->where("id_peminjaman", $this->uri->segment(3));
		$exe = $this->db->delete('peminjaman');
		if($exe){
			$result = "berhasil";
		}

		return $result;
	}

}