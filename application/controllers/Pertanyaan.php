<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanyaan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$isLogin = $this->session->userdata('username');
		if(($isLogin=="")):
		redirect('login');		
		endif;
	    $this->load->model('model_pertanyaan','model');       
    }
    public function index()
	{
		$v['getData'] = $this->model->getData();
		$v['getDataJenis'] = $this->model->getDataJenis();
		$data['content'] = $this->load->view('pertanyaan/data_pertanyaan', $v, true);
 		$this->load->view('theme', $data);
    }

  
	public function pertanyaanAdd(){
		$simpan = $this->model->insertData();
		if($simpan == "berhasil"){
			echo "<script>alert('Berhasil disimpan');</script>";
			echo "<script>document.location.href = '".base_url()."pertanyaan';</script>";
		}
	}
	



	public function pertanyaanEdit(){
		$edit = $this->model->updateData();
		if($edit == "berhasil"){
			echo "<script>alert('pertanyaan Berhasil diubah');</script>";
			echo "<script>document.location.href = '".base_url()."pertanyaan';</script>";
		}
	}
	public function pertanyaanDelete(){
		$delete = $this->model->deleteData();
		if($delete == "berhasil"){
			echo "<script>alert('pertanyaan Berhasil dihapus');</script>";
			echo "<script>document.location.href = '".base_url()."pertanyaan';</script>";
		}
	}

    
}
