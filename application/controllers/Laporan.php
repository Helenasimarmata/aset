<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$isLogin = $this->session->userdata('username');
		if(($isLogin=="")):
		redirect('login');		
		endif;     
		$this->load->model('model_laporan','model'); 
	}
    
    public function laporanKasMasuk()
	{
		
		$data['content'] = $this->load->view('laporan/laporan_kasmasuk', '', true);
 		$this->load->view('theme', $data);
    }
    public function laporanKas()
	{
		
		$data['content'] = $this->load->view('laporan/laporan_kas', '', true);
 		$this->load->view('theme', $data);
    }
    public function laporanPengeluaranKas()
    {
        
        $data['content'] = $this->load->view('laporan/laporan_pengeluaran_kas', '', true);
        $this->load->view('theme', $data);
    }
    public function cetakKas()
    {
    	$v['getDataSaldo'] = $this->model->getDataSaldo();
    	$v['getAkunMasuk'] = $this->model->getAkunMasuk();
    	$v['getAkunKeluar'] = $this->model->getAkunKeluar();
		$data['content'] = $this->load->view('laporan/cetak_kas', $v, true);
 		$this->load->view('master_cetak', $data);
    }
    public function cetakKasBulan()
    {
    	$v['getDataSaldoBulan'] = $this->model->getDataSaldoBulan();
    	$v['getAkunMasukBulan'] = $this->model->getAkunMasukBulan();
    	$v['getAkunKeluarBulan'] = $this->model->getAkunKeluarBulan();
		$data['content'] = $this->load->view('laporan/cetak_bulan', $v, true);
 		$this->load->view('master_cetak', $data);
    }
    public function cetakKasMasuk()
    {
    	$v['getDataKasMasuk'] = $this->model->getDataKasMasuk();
		$data['content'] = $this->load->view('laporan/cetak_kasmasuk', $v, true);
 		$this->load->view('master_cetak', $data);
    }
    public function cetakPengelolaanKas()
    {
        $v['getDataPengelolaan'] = $this->model->getDataPengelolaan();
        $data['content'] = $this->load->view('laporan/cetak_pengelolaan_kas', $v, true);
        $this->load->view('master_cetak', $data);
    }
    public function cetakKasKeluar()
    {
    	$v['getDataKasKeluar'] = $this->model->getDataKasKeluar();
		$data['content'] = $this->load->view('laporan/cetak_kaskeluar', $v, true);
 		$this->load->view('master_cetak', $data);
    }
    public function laporanKasKeluar()
	{
		
		$data['content'] = $this->load->view('laporan/laporan_kaskeluar', '', true);
 		$this->load->view('theme', $data);
    }
    
}