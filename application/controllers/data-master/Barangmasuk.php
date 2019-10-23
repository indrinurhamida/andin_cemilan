<?php

class Barangmasuk extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_barangmasuk');
		
	}


	function index(){
		
		$data['barangmasuk'] = $this->m_barangmasuk->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/barangmasuk/daftarbarangmasuk', $data);
        $this->load->view('template/footer');
	}
}