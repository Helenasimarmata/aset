<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class peminjaman extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$isLogin = $this->session->userdata('username');
		if(($isLogin=="")):
		redirect('login');		
		endif;
	    $this->load->model('model_peminjaman','model');       
    }
    public function index()
	{
		$v['getData'] = $this->model->getData();
		$v['getDataAlat'] = $this->model->getDataAlat();
		$data['content'] = $this->load->view('peminjaman/data_peminjaman', $v, true);
 		$this->load->view('theme', $data);
    }

    public function add()
	{
		
		$data['content'] = $this->load->view('tambah_peminjaman','',true);
 		$this->load->view('theme', $data);
	}
	public function peminjamanAdd(){
		$simpan = $this->model->insertData();
		if($simpan == "berhasil"){
			echo "<script>alert('Berhasil disimpan');</script>";
			echo "<script>document.location.href = '".base_url()."peminjaman';</script>";
		}
	}
	public function peminjamanAcc(){
		$simpan = $this->model->accData();
		if($simpan == "berhasil"){
			echo "<script>alert('Berhasil disetujui dan dipinjamkan');</script>";
			echo "<script>document.location.href = '".base_url()."peminjaman';</script>";
		}
	}
	public function peminjamanKembali(){
		$simpan = $this->model->kembaliData();
		if($simpan == "berhasil"){
			echo "<script>alert('Berhasil dikembalikan');</script>";
			echo "<script>document.location.href = '".base_url()."peminjaman';</script>";
		}
	}
	public function peminjamanTolak(){
		$simpan = $this->model->tolakData();
		if($simpan == "berhasil"){
			echo "<script>alert('Berhasil ditolak dan tidak dipinjamkan');</script>";
			echo "<script>document.location.href = '".base_url()."peminjaman';</script>";
		}
	}
	public function editpeminjaman()
	{
		$v['editData'] = $this->model->editData();
		$data['content'] = $this->load->view('edit_peminjaman', $v, true);
 		$this->load->view('theme', $data);
	}



	public function peminjamanEdit(){
		$edit = $this->model->updateData();
		if($edit == "berhasil"){
			echo "<script>alert('peminjaman Berhasil diubah');</script>";
			echo "<script>document.location.href = '".base_url()."peminjaman';</script>";
		}
	}
	public function peminjamanDelete(){
		$delete = $this->model->deleteData();
		if($delete == "berhasil"){
			echo "<script>alert('peminjaman Berhasil dihapus');</script>";
			echo "<script>document.location.href = '".base_url()."peminjaman';</script>";
		}
	}

    
}
