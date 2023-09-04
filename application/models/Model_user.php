<?php
Class Model_user extends CI_Model {

	function getData(){
		
        $this->db->from('user');
        $this->db->order_by('id_user', 'DESC');
		$r = $this->db->get();
		return $r->result();
	}
	

	function deleteData(){
		$result = "";

		$this->db->where("id_user", $this->uri->segment(3));
		$exe = $this->db->delete('user');
		if($exe){
			$result = "berhasil";
		}

		return $result;
	}

}