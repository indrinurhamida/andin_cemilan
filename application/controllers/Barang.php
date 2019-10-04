<?php

class Barang extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_barang');
		
	}

	function index(){
		
		$data['barang'] = $this->m_barang->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('barang/daftarbarang',$data);
        $this->load->view('template/footer');
	}

	function tambah(){
		$data['kode'] = $this->m_barang->tampil_kode();
		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('barang/daftarbarang',$data);
        $this->load->view('template/footer');

	}

	function store(){
		
	}
}

?>