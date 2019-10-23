<?php

class Barang extends CI_Controller
    {
	function __construct(){
		parent::__construct();
		$this->load->model('m_barangkeluar');
		
	}

    function index()
    {
		$data['barangkeluar'] = $this->m_barangkeluar->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/barangkeluar/daftarbarangkeluar',$data);
        $this->load->view('template/footer');
    }
    
    /*function tambah(){
		$data['kode'] = $this->m_barang->tampil_kode();
		$data['barangdetail'] = $this->m_barang->tampil_barangkeluardetail()->result();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/barangkeluar/tambahbarang', $data);
        $this->load->view('template/footer');

	}*/
}
?>