<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$isLogin = $this->session->userdata('username');
		if(($isLogin=="")):
		redirect('login');		
		endif;    
		$this->load->model('model_dashboard','model'); 
    }
	
	public function index()
	{
		
		$v['getDataUser'] = $this->model->getDataUser();
		$v['getDataProfil'] = $this->model->getDataProfil();
		$v['getDataAlat'] = $this->model->getDataAlat();
		$v['getDataMahasiswa'] = $this->model->getDataMahasiswa();
		$v['getDataPeminjaman'] = $this->model->getDataPeminjaman();
		$data['content'] = $this->load->view('dashboard', $v, true);
 		$this->load->view('theme', $data);
	}
}
