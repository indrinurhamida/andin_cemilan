<?php

class Kasir extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_kasir');
	
	function index(){
		

		$data['kasir'] = $this->m_kasir->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('transaksi/kasir/datatransaksi',$data);
        $this->load->view('template/footer');
	}

	}
}

?>

