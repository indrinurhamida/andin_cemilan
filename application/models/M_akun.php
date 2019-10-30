<?php

class M_akun extends CI_Model
{
	function tampil_kode()
	{
		$this->db->select('RIGHT (tbl_akun.id_akun, 2) as kode', FALSE);
        $this->db->order_by('id_akun', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tbl_akun');    

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
        $kodejadi = "AKN" . $kodemax;
        return $kodejadi;
	}

	function tampil_data(){
		return $this->db->get('tbl_akun');
	}

	function getPegawai(){
		return $this->db->get('tbl_pegawai')->result();
	}	

	function tampil_akun(){
		return $this->db->get('tbl_akun');
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
