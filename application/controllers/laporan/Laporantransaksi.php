<?php

class Laporantransaksi extends CI_Controller
    {
	    function __construct(){
		  parent::__construct();
            $this->load->model('m_laporantransaksi');
	}

    function index()
    {
		$data['laporantransaksi'] = $this->m_laporantransaksi->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('laporan/laporantransaksi',$data);
        $this->load->view('template/footer');
    }
    function tambah(){
        $data['kode']               = $this->m_barangmasuk->tampil_kode();
        $data['supplier']           = $this->m_barangmasuk->getSupplier();
        $data['pegawai']            = $this->m_barangmasuk->getPegawai();
        $data['barang']             = $this->m_barangmasuk->getBarang();

            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('laporan/laporantransaksi', $data);
            $this->load->view('template/footer');
        }
    } 

?>