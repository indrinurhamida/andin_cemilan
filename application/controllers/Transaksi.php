<?php

class Transaksi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_transaksi');
    }
    public function index()
    {
        $this->load->model('m_barangdetail');
        $this->load->model('m_member');
        $this->load->model('m_pegawai');
        $data['transaksi'] = $this->m_transaksi->tampil_data()->result();
        $data['barangdetail'] = $this->m_barangdetail->tampil_data()->result();
        $data['member'] = $this->m_member->tampil_data()->result();
        $data['pegawai'] = $this->m_pegawai->tampil_data()->result();

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('transaksi/tamkasir', $data);
        $this->load->view('template/footer');
    }

  //   function tambah(){
		// $data['kode'] = $this->m_transaksi->tampil_kode();

		// $this->load->view('template/header');
  //       $this->load->view('template/navbar');
  //       $this->load->view('transaksi/tamkasir', $data);
  //       $this->load->view('template/footer');

  //   }
    function add()
    {
        $data = array(
            "id_member" => $_POST["id_member"],
            "tgl_transaksi" => $_POST["tgl_transaksi"],
            "id_pegawai" => $_POST["id_pegawai"],
            "jumlah_bayar" => $_POST["jumlah_bayar"],
            "kembalian" => $_POST["kembalian"]
        );
        $this->m_transaksi->input_data($data, "tbl_transaksi");
        redirect(base_url()."transaksi");
    }
    
    function kode_barang(){
        $this->load->model('m_barangdetail');
        $kode = $_POST["kode_barang"];
        $detailbarang = $this->m_barangdetail->ambil_satu_data($kode)->result();
        $barang = array();
        foreach($detailbarang as $val) {
        $array = array(
                "id_barangdetail" => $val->id_barangdetail,
                "nama_barang" => $val->nama_barang,
                "rasa" => $val->rasa,
                "berat" => $val->berat,
                "harga" => $val->harga,
                "stok" => $val->stok
            );
        $barang[] = $array;
        }
        echo json_encode($barang);
       
    }

    function hapus ($id=''){
        $where = array('id_barangdetail' => $id);
        $this->m_transaksi->hapus_data($where, 'tbl_transaksi');
    }

}
