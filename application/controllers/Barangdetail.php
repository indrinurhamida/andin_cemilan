<?php

	class Barangdetail extends CI_Controller
	{
		function __construct(){
        parent::__construct();
        $this->load->model('m_barangdetail');
	}

		function index(){
		

		$data['barangdetail'] = $this->m_barangdetail->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/barangdetail/daftarbarangdetail',$data);
        $this->load->view('template/footer');
	}
	}
?>