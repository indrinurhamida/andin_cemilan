<?php

class Barang extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_barang');
	}

	public function index()
	{
		
		$data['barang'] = $this->m_barang->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('barang/daftarBarang', $data);
        $this->load->view('templates/footer');
	}

}

?>