<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$isLogin = $this->session->userdata('username');
		if(($isLogin=="")):
		redirect('login');		
		endif;
	    $this->load->model('model_jenis','model');       
    }
    public function index()
	{
		$v['getData'] = $this->model->getData();
		$data['content'] = $this->load->view('jenis/data_jenis', $v, true);
 		$this->load->view('theme', $data);
    }

  
	public function jenisAdd(){
		$simpan = $this->model->insertData();
		if($simpan == "berhasil"){
			echo "<script>alert('Berhasil disimpan');</script>";
			echo "<script>document.location.href = '".base_url()."jenis';</script>";
		}
	}
	



	public function jenisEdit(){
		$edit = $this->model->updateData();
		if($edit == "berhasil"){
			echo "<script>alert('jenis Berhasil diubah');</script>";
			echo "<script>document.location.href = '".base_url()."jenis';</script>";
		}
	}
	public function jenisDelete(){
		$delete = $this->model->deleteData();
		if($delete == "berhasil"){
			echo "<script>alert('jenis Berhasil dihapus');</script>";
			echo "<script>document.location.href = '".base_url()."jenis';</script>";
		}
	}

    
}
