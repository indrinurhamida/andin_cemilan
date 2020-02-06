<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	//$this->load->helper('url');
	public function index()
	{
		check_not_login();
		if($this->session->userdata('jabatan') == "owner"){
        	$this->load->view('template/header');
        	$this->load->view('template_login/navbar_owner');
        	$this->load->view('template_dashboard/owner');
        	$this->load->view('template/footer');

    	} elseif($this->session->userdata('jabatan') == "kasir"){
    		$this->load->view('template/header');
        	$this->load->view('template_login/navbar_kasir');
        	$this->load->view('template_dashboard/kasir');
        	$this->load->view('template/footer');
    	} elseif($this->session->userdata('jabatan') == "gudang"){
    		$this->load->view('template/header');
        	$this->load->view('template_login/navbar_gudang');
        	$this->load->view('template_dashboard/gudang');
        	$this->load->view('template/footer');
    	} elseif($this->session->userdata('jabatan') == "admin"){
    		$this->load->view('template/header');
        	$this->load->view('template/navbar');
        	$this->load->view('dashboard');
        	$this->load->view('template/footer');
		}
	}

	public function logout(){
		$params = array('id_akun', 'jabatan');
		$this->session->unset_userdata($params);
		redirect('login');
	}

}
