<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kuisioner extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$isLogin = $this->session->userdata('username');
		if(($isLogin=="")):
		redirect('login');		
		endif;
	    $this->load->model('model_kuisioner','model');       
    }
    public function index()
	{
		$v['getData'] = $this->model->getData();
		$data['content'] = $this->load->view('kuisioner/data_kuisioner', $v, true);
 		$this->load->view('theme', $data);
    }
    public function cetakKuisioner()
	{
		$v['getDataKuisioner'] = $this->model->getDataKuisioner();
		$data['content'] = $this->load->view('kuisioner/cetak_kuisioner', $v, true);
 		$this->load->view('master_cetak', $data);
    }

    public function add()
	{
		
		$data['content'] = $this->load->view('tambah_kuisioner','',true);
 		$this->load->view('theme', $data);
	}
	public function kuisionerAdd(){
		$simpan = $this->model->insertData();
		if($simpan == "berhasil"){
			echo "<script>alert('Berhasil disimpan');</script>";
			echo "<script>document.location.href = '".base_url()."kuisioner';</script>";
		}
	}
	public function kuisionerAcc(){
		$simpan = $this->model->accData();
		if($simpan == "berhasil"){
			echo "<script>alert('Berhasil disetujui');</script>";
			echo "<script>document.location.href = '".base_url()."kuisioner';</script>";
		}
	}
	public function kuisionerTolak(){
		$simpan = $this->model->tolakData();
		if($simpan == "berhasil"){
			echo "<script>alert('Berhasil ditolak');</script>";
			echo "<script>document.location.href = '".base_url()."kuisioner';</script>";
		}
	}
	public function editkuisioner()
	{
		$v['editData'] = $this->model->editData();
		$data['content'] = $this->load->view('edit_kuisioner', $v, true);
 		$this->load->view('theme', $data);
	}
	public function tambahData()
	{
		
		$data['content'] = $this->load->view('kuisioner/tambah', '', true);
 		$this->load->view('theme', $data);
	}



	public function kuisionerEdit(){
		$edit = $this->model->updateData();
		if($edit == "berhasil"){
			echo "<script>alert('kuisioner Berhasil diubah');</script>";
			echo "<script>document.location.href = '".base_url()."kuisioner';</script>";
		}
	}
	public function kuisionerDelete(){
		$delete = $this->model->deleteData();
		if($delete == "berhasil"){
			echo "<script>alert('kuisioner Berhasil dihapus');</script>";
			echo "<script>document.location.href = '".base_url()."kuisioner';</script>";
		}
	}

    
}
