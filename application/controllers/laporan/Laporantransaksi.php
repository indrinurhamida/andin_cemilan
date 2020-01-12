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

        if($this->session->userdata('jabatan') == "owner"){
               $this->load->view('template_login/navbar_owner');
        }
        $this->load->view('laporan/laporantransaksi',$data);
        $this->load->view('template/footer');
    }
    function detail_laporan()
    {
        $data['detail_laporan'] = $this->m_laporantransaksi->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('laporan/laporantransaksi',$data);
        $this->load->view('template/footer');
    }
    }

?>