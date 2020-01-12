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
            $data['id']               = $this->m_laporantransaksi->tampil_kode();
            $data['supplier']           = $this->m_laporantransaksi->getSupplier();
            $data['pegawai']            = $this->m_laporantransaksi->getPegawai();
            $data['barangdetail']             = $this->m_laporantransaksi->getBarang();
            $data['member']             = $this->m_laporantransaksi->getmember();

            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('laporan/laporantransaksi', $data);
            $this->load->view('template/footer');
        }
    }

?>