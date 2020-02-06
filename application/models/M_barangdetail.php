<?php
class M_barangdetail extends CI_Model
{
    function tampil_kode()
    {
        $this->db->select('RIGHT(tbl_barangdetail.id_barangdetail,2) as kode', FALSE);
        $this->db->order_by('id_barangdetail', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tbl_barangdetail');      //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //jika kode ternyata sudah ada.      
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            //jika kode belum ada      
            $kode = 1;
        }
        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = "DEB" . $kodemax;
        return $kodejadi;
    }
    function tampil_data(){

        //return $this->db->query ("SELECT * FROM tbl_barangdetail JOIN
        //tbl_barang WHERE tbl_barang.id_barang = tbl_barangdetail.id_barang
        //JOIN tbl_rasa WHERE tbl_rasa.id_rasa = tbl_barangdetail.id_rasa");

        //return $this->db->get('tbl_barangdetail');

        //return $this->db->query('SELECT tbl_barang.nama_barang, tbl_rasa.nama_rasa,tbl_barangdetail.id_barangdetail, tbl_barangdetail.id_barang, tbl_barangdetail.id_rasa, tbl_barangdetail.berat, tbl_barangdetail.harga, tbl_barangdetail.stok FROM `tbl_barangdetail` JOIN `tbl_barang` ON tbl_barang.id_barang = tbl_barangdetail.id_barang JOIN `tbl_rasa` ON tbl_rasa.id_rasa = tbl_barang.id_rasa');

        return $this->db->query('SELECT bt.id_barangdetail, br.nama_barang, r.nama_rasa, bt.berat, bt.harga, bt.stok FROM tbl_barangdetail bt JOIN tbl_barang br ON bt.id_barang=br.id_barang JOIN tbl_rasa r ON bt.id_rasa=r.id_rasa');
    }


    function ambil_satu_data($kode){
        return $this->db->query("SELECT b.nama_barang, b.id_rasa, bt.id_barangdetail, bt.berat, bt.harga, bt.stok FROM `tbl_barangdetail` as bt join tbl_barang as b ON bt.id_barang=b.id_barang WHERE bt.id_barangdetail='".$kode."'");
    }

    function tampil_barang(){
        //return $this->db->query('SELECT b.nama_barang, r.nama_rasa FROM `tbl_barang` as b JOIN tbl_rasa as r ON r.id_rasa=b.id_rasa');

        return $this->db->query('SELECT tbl_barang.nama_barang, tbl_rasa.nama_rasa FROM `tbl_barang` JOIN tbl_rasa ON tbl_rasa.id_rasa = tbl_barang.id_rasa')->result();
		// return $this->db->get('tbl_barang')->result();
        //return $this->db->get('tbl_rasa')->result();
        //return $this->db->get('tbl_barang')->result();
    }

    function getRasa(){
        return $this->db->get('tbl_rasa')->result();
    }

    function getBarang(){
        return $this->db->get('tbl_barang')->result();
    }
    
    function input_data($data, $table){
        $this->db->insert($table, $data);
    }
    
    function edit_data($table, $where){
        return $this->db->get_where($table, $where);
    }
   
    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
   
    function hapus_data($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
?>
