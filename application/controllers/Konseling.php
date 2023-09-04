<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konseling extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$isLogin = $this->session->userdata('username');
		if(($isLogin=="")):
		redirect('login');		
		endif;
	    $this->load->model('model_konseling','model');       
    }
    public function index()
	{
		$v['getData'] = $this->model->getData();
		$data['content'] = $this->load->view('konseling/data_konseling', $v, true);
 		$this->load->view('theme', $data);
    }

    public function tambahData()
	{
		$v['getDataPertanyaan'] = $this->model->getDataPertanyaan();
		$data['content'] = $this->load->view('konseling/tambah',$v,true);
 		$this->load->view('theme', $data);
	}
	public function konselingAdd(){
		$simpan = $this->model->insertData();
		if($simpan == "berhasil"){
			echo "<script>alert('Berhasil disimpan');</script>";
			echo "<script>document.location.href = '".base_url()."konseling';</script>";
		}
	}
	public function cetakKonseling()
	{
		$v['getDataDetail'] = $this->model->getDataDetail();
		$data['content'] = $this->load->view('konseling/cetak_konseling', $v, true);
 		$this->load->view('master_cetak', $data);
    }
	public function editkonseling()
	{
		$v['editData'] = $this->model->editData();
		$data['content'] = $this->load->view('edit_konseling', $v, true);
 		$this->load->view('theme', $data);
	}




	public function konselingEdit(){
		$edit = $this->model->updateData();
		if($edit == "berhasil"){
			echo "<script>alert('konseling Berhasil diubah');</script>";
			echo "<script>document.location.href = '".base_url()."konseling';</script>";
		}
	}
	public function konselingDelete(){
		$delete = $this->model->deleteData();
		if($delete == "berhasil"){
			echo "<script>alert('konseling Berhasil dihapus');</script>";
			echo "<script>document.location.href = '".base_url()."konseling';</script>";
		}
	}

    
}
