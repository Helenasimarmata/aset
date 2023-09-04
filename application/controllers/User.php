<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$isLogin = $this->session->userdata('username');
		if(($isLogin=="")):
		redirect('login');		
		endif;
	    $this->load->model('model_user','model');       
    }
    public function index()
	{
		$v['getData'] = $this->model->getData();
		$data['content'] = $this->load->view('user/data_user', $v, true);
 		$this->load->view('theme', $data);
    }

    public function add()
	{
		
		$data['content'] = $this->load->view('tambah_user','',true);
 		$this->load->view('theme', $data);
	}
	public function userAdd(){
		$simpan = $this->model->insertData();
		if($simpan == "berhasil"){
			echo "<script>alert('Berhasil disimpan');</script>";
			echo "<script>document.location.href = '".base_url()."user';</script>";
		}
	}
	public function edituser()
	{
		$v['editData'] = $this->model->editData();
		$data['content'] = $this->load->view('edit_user', $v, true);
 		$this->load->view('theme', $data);
	}



	public function userEdit(){
		$edit = $this->model->updateData();
		if($edit == "berhasil"){
			echo "<script>alert('user Berhasil diubah');</script>";
			echo "<script>document.location.href = '".base_url()."user';</script>";
		}
	}
	public function userDelete(){
		$delete = $this->model->deleteData();
		if($delete == "berhasil"){
			echo "<script>alert('user Berhasil dihapus');</script>";
			echo "<script>document.location.href = '".base_url()."user';</script>";
		}
	}

    
}
