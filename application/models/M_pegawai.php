<?php

class M_pegawai extends CI_Model
{
	function tampil_kode()
	{
	$this->db->select('RIGHT (tbl_pegawai.id_pegawai, 2) as kode', FALSE);
	$this->db->order_by('id_pegawai', 'DESC');
 	$this->db->limit(1);
 	$query = $this->db->get('tbl_pegawai');    

 // //        //cek dulu apakah ada sudah ada kode di tabel.    
	if ($query->num_rows() <> 0) {
            
 // //            //jika kode ternyata sudah ada.      
	$data = $query->row();
 	$kode = intval($data->kode) + 1;
 	} else {
            
 // //            //jika kode belum ada      
	$kode = 1;
	}
 	$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
	$kodejadi = "PGW" . $kodemax;
	return $kodejadi;
	}

	function tampil_data(){
		return $this->db->get('tbl_pegawai');
	}

	function tambah(){
		return $this->db->get('tbl_pegawai');
	}

	function tampil_pegawai(){
		return $this->db->get('tbl_pegawai');
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
