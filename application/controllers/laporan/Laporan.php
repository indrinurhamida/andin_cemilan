<?php

class Laporan extends CI_Controller
    {
	function __construct(){
		parent::__construct();
		$this->load->model('m_laporan');
		
	}

    function index()
    {
		$data['laporan'] = $this->m_laporan->tampil_data()->result();
        $this->load->view('template/header');
        if($this->session->set_userdata('jabatan','admin')){

            // jika yang login adalah admin maka menggunakan navbar_gudang
            
            $this->load->view('template_login/navbar_admin');
            

        } elseif ($this->session->set_userdata('jabatan','gudang')) {

            // jika yang login adalah pegawai maka menggunakan navbar_admin
           
            $this->load->view('template_login/navbar_gudang');
            

        } else {
            
            // jika yang login adalah gudang maka menggunakan navbar_pegawai
            $this->load->view('template_login/navbar_pegawai');
        }
        $this->load->view('laporan/datalaporan',$data);
        $this->load->view('template/footer');
    }
    
    }

?>