<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alat extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$isLogin = $this->session->userdata('username');
		if(($isLogin=="")):
		redirect('login');		
		endif;
	    $this->load->model('model_alat','model');       
    }
    public function index()
	{
		$v['getData'] = $this->model->getData();
		$data['content'] = $this->load->view('alat/data_alat', $v, true);
 		$this->load->view('theme', $data);
    }

    public function add()
	{
		
		$data['content'] = $this->load->view('tambah_alat','',true);
 		$this->load->view('theme', $data);
	}
	public function alatAdd(){
		$simpan = $this->model->insertData();
		if($simpan == "berhasil"){
			echo "<script>alert('Berhasil disimpan');</script>";
			echo "<script>document.location.href = '".base_url()."alat';</script>";
		}
	}
	public function editalat()
	{
		$v['editData'] = $this->model->editData();
		$data['content'] = $this->load->view('edit_alat', $v, true);
 		$this->load->view('theme', $data);
	}



	public function alatEdit(){
		$edit = $this->model->updateData();
		if($edit == "berhasil"){
			echo "<script>alert('alat Berhasil diubah');</script>";
			echo "<script>document.location.href = '".base_url()."alat';</script>";
		}
	}
	public function alatDelete(){
		$delete = $this->model->deleteData();
		if($delete == "berhasil"){
			echo "<script>alert('alat Berhasil dihapus');</script>";
			echo "<script>document.location.href = '".base_url()."alat';</script>";
		}
	}

    
}
