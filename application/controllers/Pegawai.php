<?php

class Pegawai extends CI_Controller
{
    function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
  }
 
  function index(){
      $this->load->view('template/header');
      $this->load->view('template_login/navbar_pegawai');
      $this->load->view('template/footer');
    }
  function pegawai_login(){
    if($this->session->set_userdata('jabatan','pegawai')){
      $this->load->view('template_login/navbar_pegawai');
    }
    //echo "berhasillll";
    //$this->load->view('dashboard');
  }
}
    
  
