<?php

class M_laporan extends CI_Model
{
	function tampil_data(){
		return $this->db->get('tbl_barangdetail');
	}

	function tampil_barangdetail(){
		return $this->db->get('tbl_barangdetail');
	}

	function input_data($data, $table){
		$this->db->insert($table, $data);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($table,$where){
		return $this->db->get_where($table, $where);
	}

	
}

?>
