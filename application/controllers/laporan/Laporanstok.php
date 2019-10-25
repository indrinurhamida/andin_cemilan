<?php

class Laporanstok extends CI_Controller
    {
	function __construct(){
		parent::__construct();
		$this->load->model('m_laporan');
		
	}

    function index()
    {
		$data['laporan'] = $this->m_laporan->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('laporan/datalaporan',$data);
        $this->load->view('template/footer');
    }
    
    }

?>