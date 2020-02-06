<?php

class Rasa extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_rasa');
		
	}

	function index(){

		$data['rasa'] = $this->m_rasa->tampil_data()->result();
        $this->load->view('template/header');
        if($this->session->userdata('jabatan') == "kasir"){
        	   $this->load->view('template_login/navbar_kasir');
        	}elseif($this->session->userdata('jabatan') == "gudang"){
        	   $this->load->view('template_login/navbar_gudang');
        	}elseif ($this->session->userdata('jabatan') == "admin") {
        	   $this->load->view('template/navbar');	
        	}
        $this->load->view('data-master/rasa/daftarrasa',$data);
        $this->load->view('template/footer');
	}

	function tambah(){
		$data['kode'] = $this->m_rasa->tampil_kode();

		$this->load->view('template/header');
        if($this->session->userdata('jabatan') == "kasir"){
        	   $this->load->view('template_login/navbar_kasir');
        	}elseif($this->session->userdata('jabatan') == "gudang"){
        	   $this->load->view('template_login/navbar_gudang');
        	}elseif ($this->session->userdata('jabatan') == "admin") {
        	   $this->load->view('template/navbar');	
        	}
        $this->load->view('data-master/rasa/tambahrasa', $data);
        $this->load->view('template/footer');

	}

	function tambah_aksi(){
		$id_rasa		= $this->input->post('id_rasa');
		$nama_rasa	= $this->input->post('nama_rasa');

		$data = array(
			'id_rasa'			=> $id_rasa,
			'nama_rasa' 		=> $nama_rasa,
		);

		$this->m_rasa->input_data($data, 'tbl_rasa');
		redirect('data-master/rasa');
		
	}

	function update(){
		$id_rasa		= $this->input->post('id_rasa');
		$nama_rasa	= $this->input->post('nama_rasa');

		$data = array(
			'id_rasa'			=> $id_rasa,
			'nama_rasa' 		=> $nama_rasa,
		);

		$where = array(
			'id_rasa' => $id_rasa
		);

		$this->m_rasa->update_data($where, $data, 'tbl_rasa');
		redirect('data-master/rasa');

	}
}

?>