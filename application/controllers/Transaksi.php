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
        $data['transaksi'] = $this->m_transaksi->tampil_data()->result();
        $data['barangdetail'] = $this->m_barangdetail->tampil_data()->result();
        $data['member'] = $this->m_member->tampil_data()->result();


        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('transaksi/tamkasir', $data);
        $this->load->view('template/footer');
    }

    function tambah(){
		$data['kode'] = $this->m_transaksi->tampil_kode();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('transaksi/tamkasir', $data);
        $this->load->view('template/footer');

    }
    
    function kode_barang(){
        $this->load->model('m_barangdetail');
        $kode = $_POST["kode_barang"];
        $detailbarang = $this->m_barangdetail->ambil_satu_data($kode)->result();
        foreach($detailbarang as $val) {
        $barang = array(
                "id_barangdetail" => $val->id_barangdetail,
                "nama_barang" => $val->nama_barang,
                "rasa" => $val->rasa,
                "berat" => $val->berat,
                "harga" => $val->harga,
                "stok" => $val->stok
            );
        }

        echo json_encode($barang);
       
    }

    

}
