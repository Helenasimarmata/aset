<?php
Class Model_laporan extends CI_Model {



	function getDataKasMasuk()
	{
		
        $tgl_awal = $this->input->post('dari');
		$tgl_akhir = $this->input->post('sampai');
		
			$this->db->from('kas_masuk');
			$this->db->join('akun','akun.id_akun=kas_masuk.id_akun');
        $this->db->where('tanggal_masuk >=',$tgl_awal);
		$this->db->where('tanggal_masuk <=',$tgl_akhir);
		$this->db->order_by('id_masuk', 'ASC');
		
		$r = $this->db->get();
		return $r->result();
	}
	function getDataPengelolaan(){
		
        $tgl_awal = $this->input->post('dari');
		$tgl_akhir = $this->input->post('sampai');

		$query = $this->db->query("select SUM(kas_keluar.jumlah_keluar)as total_akun_keluar,akun.nama_akun,akun.kode_akun from kas_keluar,akun where kas_keluar.id_akun=akun.id_akun and akun.jenis='Pengeluaran' and kas_keluar.tanggal_keluar between '$tgl_awal' and '$tgl_akhir' group by akun.id_akun")->result();
		return $query;
	}
	function getAkunMasuk()
	{
		
        $tgl_awal = $this->input->post('dari');
		$tgl_akhir = $this->input->post('sampai');

		$query = $this->db->query("select SUM(kas_masuk.jumlah_masuk)as total_akun_masuk,akun.nama_akun,akun.kode_akun from kas_masuk,akun where kas_masuk.id_akun=akun.id_akun and akun.jenis='Penerimaan' and kas_masuk.id_akun!='12' and kas_masuk.tanggal_masuk between '$tgl_awal' and '$tgl_akhir' group by akun.id_akun")->result();
		return $query;
	}
	function getAkunKeluar()
	{
		
        $tgl_awal = $this->input->post('dari');
		$tgl_akhir = $this->input->post('sampai');

		$query = $this->db->query("select SUM(kas_keluar.jumlah_keluar)as total_akun_keluar,akun.nama_akun,akun.kode_akun from kas_keluar,akun where kas_keluar.id_akun=akun.id_akun and akun.jenis='Pengeluaran' and kas_keluar.tanggal_keluar between '$tgl_awal' and '$tgl_akhir' group by akun.id_akun")->result();
		return $query;
	}
	
	function getDataSaldo(){

		$tgl_awal = $this->input->post('dari');
		$tgl_akhir = $this->input->post('sampai');

		$query = $this->db->query("select SUM(kas_masuk.jumlah_masuk)as saldo from kas_masuk where id_akun='12' and tanggal_masuk between '$tgl_awal' and '$tgl_akhir'")->result();
		return $query;
	}




	function getAkunMasukBulan()
	{
		
        $bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$query = $this->db->query("select SUM(kas_masuk.jumlah_masuk)as total_akun_masuk,akun.nama_akun,akun.kode_akun from kas_masuk,akun where kas_masuk.id_akun=akun.id_akun and akun.jenis='Penerimaan' and kas_masuk.id_akun!='12' and MONTH(kas_masuk.tanggal_masuk)='$bulan' and YEAR(kas_masuk.tanggal_masuk)='$tahun' group by akun.id_akun")->result();
		return $query;
	}
	function getAkunKeluarBulan()
	{
		
        $bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$query = $this->db->query("select SUM(kas_keluar.jumlah_keluar)as total_akun_keluar,akun.nama_akun,akun.kode_akun from kas_keluar,akun where kas_keluar.id_akun=akun.id_akun and akun.jenis='Pengeluaran' and MONTH(kas_keluar.tanggal_keluar)='$bulan' and YEAR(kas_keluar.tanggal_keluar)='$tahun' group by akun.id_akun")->result();
		return $query;
	}
	
	function getDataSaldoBulan(){

		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$query = $this->db->query("select SUM(kas_masuk.jumlah_masuk)as saldo from kas_masuk where id_akun='12' and MONTH(kas_masuk.tanggal_masuk)='$bulan' and YEAR(kas_masuk.tanggal_masuk)='$tahun'")->result();
		return $query;
	}



	function getDataTransaksi(){

		$tgl_awal = $this->input->post('dari');
		$tgl_akhir = $this->input->post('sampai');

		$this->db->from('transaksi');
		$this->db->where('tanggal_transaksi >=',$tgl_awal);
		$this->db->where('tanggal_transaksi <=',$tgl_akhir);
        $this->db->order_by('id_transaksi', 'ASC');
		$r = $this->db->get();
		return $r->result();
	}
	function getDataKasKeluar()
	{
		
        $tgl_awal = $this->input->post('dari');
		$tgl_akhir = $this->input->post('sampai');
		
			$this->db->from('kas_keluar');
			$this->db->join('akun','akun.id_akun=kas_keluar.id_akun');
        $this->db->where('tanggal_keluar >=',$tgl_awal);
		$this->db->where('tanggal_keluar <=',$tgl_akhir);
		$this->db->order_by('id_keluar', 'ASC');
		$r = $this->db->get();
		return $r->result();
	}

}