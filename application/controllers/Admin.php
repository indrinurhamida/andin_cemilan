<?php

class Admin extends CI_Controller
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
      $this->load->view('template_login/navbar_admin');
      $this->load->view('template/footer');
    }
  function admin_login(){
    if($this->session->set_userdata('jabatan','admin')){
      $this->load->view('template_login/navbar_admin');
    }
    //echo "berhasillll";
    //$this->load->view('dashboard');
  }
}