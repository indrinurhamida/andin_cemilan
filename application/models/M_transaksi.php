<?php
class M_transaksi extends CI_Model
{

	function tampil_kode1()
	{
		$this->db->select('RIGHT (tbl_transaksi.id_transaksi, 2) as kode', FALSE);
		$this->db->order_by('id_transaksi', 'DESC');
		$this->db->limit(1);
        $query = $this->db->get('tbl_transaksi');    

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
        $kodetepat = "TRK" . $kodemax;
		return $kodetepat;
	}

		function tampil_kode()
		{
			$this->db->select('RIGHT (tbl_barang.id_barang, 2) as kode', FALSE);
			$this->db->order_by('id_barang', 'DESC');
			$this->db->limit(1);
				
        $query = $this->db->get('tbl_barang');    

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
        $kodejadi = "BRG" . $kodemax;
        return $kodejadi;   
	}

	function tampil_data(){
		return $this->db->get('tbl_barang');
	}

	//function detail_laporan($kode){
        //return $this->db->query("SELECT t.nama_barang, b.rasa, bt.id_barangdetail, bt.berat, bt.harga, bt.stok FROM `tbl_barangdetail` as bt join tbl_barang as b ON bt.id_barang=b.id_barang WHERE bt.id_barangdetail='".$kode."'");
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
	function lastId(){
		$sql = $this->db->select("id_transaksi");
		$sql = $this->db->from("tbl_transaksi");
		$sql = $this->db->order_by('id_transaksi','desc');
		$sql = $this->db->limit(1);
		$sql = $this->db->get();

		return $sql->result_array();
	}

}

?>
