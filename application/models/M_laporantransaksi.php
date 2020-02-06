<?php

class M_laporantransaksi extends CI_Model
{
	//function tampil_kode()
		//{
			//$this->db->select('RIGHT (tbl_transaksidetail.id_transaksidetail, 2) as kode', FALSE);
			//$this->db->order_by('id_transaksidetail', 'DESC');
			//$this->db->limit(1);
				
        //$query = $this->db->get('tbl_transaksidetail');    

        //cek dulu apakah ada sudah ada kode di tabel.    
        //if ($query->num_rows() <> 0) {
            
            //jika kode ternyata sudah ada.      
            //$data = $query->row();
            //$kode = intval($data->kode) + 1;
        //} else {
            
            //jika kode belum ada      
            //$kode = 1;
        //}
        //$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        //$kodejadi = "DTK" . $kodemax;
        //return $kodejadi;   
	//}
	
	function tampil_data(){
		return $this->db->get('tbl_transaksi');
	}

	function tampil_detail(){
		return $this->db->get('tbl_transaksidetail');
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

	/*function detail_laporan($filter){
		$where = array('id_transaksi' => $id);
		$data['barangdetail'] = $this->m_barangdetail->edit_data('tbl_barang', $where)->row_array();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/barang/editbarang', $data);
        $this->load->view('template/footer');
	}*/
	
}

?>
