<?php
Class Model_login extends CI_Model {

	function getData(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$proses = "";

		$query = $this->db->query("select * from user WHERE username='$username' AND password='$password'");
		if($query->num_rows() > 0){
			$row = $query->row_array();
			$newdata = array(
			        'username'  => $row['username'],
			        'level' => $row['level'],
			        'isLogin' => TRUE
			);
			$this->session->set_userdata($newdata);
			
			$proses = "berhasil";
		}else{
			$proses = "gagal";
		}

		return $proses;
	}
}