<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class peminjaman_ruang extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$isLogin = $this->session->userdata('username');
		if(($isLogin=="")):
		redirect('login');		
		endif;
	    $this->load->model('model_peminjaman_ruang','model');       
    }
    public function index()
	{
		$v['getDataRuang'] = $this->model->getDataRuang();
		$data['content'] = $this->load->view('peminjaman_ruang/data_peminjaman_ruang', $v, true);
 		$this->load->view('theme', $data);
    }

    public function add()
	{
		
		$data['content'] = $this->load->view('tambah_peminjaman_ruang','',true);
 		$this->load->view('theme', $data);
	}
	public function peminjamanRuangAdd(){
		$simpan = $this->model->insertDataRuang();
		if($simpan == "berhasil"){
			echo "<script>alert('Berhasil disimpan');</script>";
			echo "<script>document.location.href = '".base_url()."peminjaman_ruang';</script>";
		}
	}
	public function peminjamanRuangAcc(){
		$simpan = $this->model->accDataRuang();
		if($simpan == "berhasil"){
			echo "<script>alert('Ruangan Berhasil disetujui dan dipinjamkan');</script>";
			echo "<script>document.location.href = '".base_url()."peminjaman_ruang';</script>";
		}
	}
	public function peminjamanRuangKembali(){
		$simpan = $this->model->kembaliDataRuang();
		if($simpan == "berhasil"){
			echo "<script>alert('Ruangan Berhasil dikembalikan');</script>";
			echo "<script>document.location.href = '".base_url()."peminjaman_ruang';</script>";
		}
	}
	public function peminjamanRuangTolak(){
		$simpan = $this->model->tolakDataRuang();
		if($simpan == "berhasil"){
			echo "<script>alert('Berhasil ditolak dan tidak dipinjamkan ruangan');</script>";
			echo "<script>document.location.href = '".base_url()."peminjaman_ruang';</script>";
		}
	}
	public function editpeminjamanRuang()
	{
		$v['editDataRuang'] = $this->model->editDataRuang();
		$data['content'] = $this->load->view('edit_peminjaman_ruang', $v, true);
 		$this->load->view('theme', $data);
	}



	public function peminjamanRuangEdit(){
		$edit = $this->model->updateData();
		if($edit == "berhasil"){
			echo "<script>alert('peminjaman ruang Berhasil diubah');</script>";
			echo "<script>document.location.href = '".base_url()."peminjaman_ruang';</script>";
		}
	}
	public function peminjamanRuangDelete(){
		$delete = $this->model->deleteData();
		if($delete == "berhasil"){
			echo "<script>alert('peminjaman Ruangan Berhasil dihapus');</script>";
			echo "<script>document.location.href = '".base_url()."peminjaman_ruang';</script>";
		}
	}

    
}
