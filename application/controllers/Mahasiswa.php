<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$isLogin = $this->session->userdata('username');
		if(($isLogin=="")):
		redirect('login');		
		endif;
	    $this->load->model('model_mahasiswa','model');       
    }
    public function index()
	{
		$v['getData'] = $this->model->getData();
		$data['content'] = $this->load->view('mahasiswa/data_mahasiswa', $v, true);
 		$this->load->view('theme', $data);
    }

    public function add()
	{
		
		$data['content'] = $this->load->view('tambah_mahasiswa','',true);
 		$this->load->view('theme', $data);
	}
	public function mahasiswaAdd(){
		$simpan = $this->model->insertData();
		if($simpan == "berhasil"){
			echo "<script>alert('Berhasil disimpan');</script>";
			echo "<script>document.location.href = '".base_url()."mahasiswa';</script>";
		}
	}
	public function edit()
	{
		$v['getDataMahasiswa'] = $this->model->getDataMahasiswa();
		$data['content'] = $this->load->view('mahasiswa/edit_mahasiswa', $v, true);
 		$this->load->view('theme', $data);
	}



	public function update(){
		$edit = $this->model->updateData();
		if($edit == "berhasil"){
			echo "<script>alert('Profil Berhasil diubah');</script>";
			echo "<script>document.location.href = '".base_url()."mahasiswa/edit';</script>";
		}
	}
	public function mahasiswaDelete(){
		$delete = $this->model->deleteData();
		if($delete == "berhasil"){
			echo "<script>alert('mahasiswa Berhasil dihapus');</script>";
			echo "<script>document.location.href = '".base_url()."mahasiswa';</script>";
		}
	}

    
}
