<?php

class M_barangmasuk extends CI_Model
{
	function tampil_kode()
	 {
	 	$this->db->select('RIGHT (tbl_barangmasuk.id_barangmasuk, 2) as kode', FALSE);
        $this->db->order_by('id_barangmasuk', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tbl_barangmasuk');    

         //cek dulu apakah ada sudah ada kode di tabel.    
         if ($query->num_rows() <> 0) {
            
             //jika kode ternyata sudah ada.      
             $data = $query->row();
             $kode = intval($data->kode) + 1;
         } else {
            
             //jika kode belum ada      
             $kode = 1;
         }
         $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
         $kodejadi = "BRM" . $kodemax;
         return $kodejadi;
	 }

	function tampil_data(){
		return $this->db->query('SELECT bm.id_barangmasuk, bm.tgl_masuk, br.nama_barang, sp.nama_supplier, pg.nama_pegawai, bm.berat, bm.qty, bm.harga_beli FROM tbl_barangmasuk bm JOIN tbl_supplier sp ON bm.id_supplier=sp.id_supplier JOIN tbl_barang br ON bm.id_barang=br.id_barang JOIN tbl_pegawai pg ON bm.id_pegawai=pg.id_pegawai');
	}

	function tampil_barang(){
		return $this->db->get('tbl_barang');
	}

	function getSupplier(){
		return $this->db->get('tbl_supplier')->result();
	}

	function getPegawai(){
		return $this->db->get('tbl_pegawai')->result();
	}

	function getBarang(){
		return $this->db->get('tbl_barang')->result();
	}

	//function getRasa(){
		//return $this->db->get('tbl_rasa')->result();
	//}

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
