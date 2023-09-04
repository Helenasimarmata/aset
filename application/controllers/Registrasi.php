<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {
	public function __construct(){
		parent::__construct();
	    $this->load->model('model_registrasi','model');       
    }

	public function index()
	{
		$this->load->view('registrasi');
	}

	public function insert(){
		$regis = $this->model->insertData();
		if($regis == "berhasil"){
			echo "<script>alert('Registasi Berhasil');</script>";
			echo "<script>document.location.href = '".base_url()."login';</script>";
		}elseif($regis == "gagal"){
			echo "<script>alert('Gagal');</script>";
			echo "<script>document.location.href = '".base_url()."registrasi';</script>";
		}
	}

	function logout(){
    	$array_items = array(
	        'username',
	        'nama',
	        'pangkat',
	        'foto'
        );
		$this->session->unset_userdata($array_items);

		redirect('login');
    }
}
