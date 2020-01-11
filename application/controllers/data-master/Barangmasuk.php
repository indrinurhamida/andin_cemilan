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
        if($this->session->userdata('jabatan') == "admin"){
        	   $this->load->view('template/navbar');
        	}elseif($this->session->userdata('jabatan') == "gudang"){
        	   $this->load->view('template_login/navbar_gudang');
        	}
        $this->load->view('data-master/barangmasuk/daftarbarangmasuk', $data);
        $this->load->view('template/footer');
	}

	 function tambah(){
		$data['kode'] 				= $this->m_barangmasuk->tampil_kode();
		$data['supplier'] 			= $this->m_barangmasuk->getSupplier();
		$data['pegawai'] 			= $this->m_barangmasuk->getPegawai();
		$data['barang'] 			= $this->m_barangmasuk->getBarang();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/barangmasuk/tambahbarangmasuk', $data);
        $this->load->view('template/footer');

	}

	

	function tambah_aksi(){
		$id_barangmasuk			= $this->input->post('id_barangmasuk');
		$tgl_masuk				= $this->input->post('tgl_masuk');
		$id_supplier			= $this->input->post('id_supplier');
		$id_barang				= $this->input->post('id_barang');
		$id_pegawai				= $this->input->post('id_pegawai');
		$berat					= $this->input->post('berat');
		$harga_beli				= $this->input->post('harga_beli');
		$data = array(
			'id_barangmasuk'		=> $id_barangmasuk,
			'tgl_masuk' 			=> $tgl_masuk,
			'id_supplier' 			=> $id_supplier,
			'id_barang' 			=> $id_barang,
			'id_pegawai'			=> $id_pegawai,
			'berat' 				=> $berat,
			'harga_beli' 			=> $harga_beli
		);
		$this->m_barangmasuk->input_data($data, 'tbl_barangmasuk');
		redirect('data-master/barangmasuk');	
	}

	function hapus ($id=''){
		$where = array('id_barangmasuk' => $id);
		$this->m_barangmasuk->hapus_data($where, 'tbl_barangmasuk');
		redirect('data-master/barangmasuk');
	}

	function edit($id){
		$where = array('id_barangmasuk' => $id);
		$data['supplier'] 			= $this->m_barangmasuk->getSupplier();
		$data['pegawai'] 			= $this->m_barangmasuk->getPegawai();
		$data['barang'] 			= $this->m_barangmasuk->getBarang();
		$data['barangmasuk'] 		= $this->m_barangmasuk->edit_data('tbl_barangmasuk', $where)->row_array();
		
		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/barangmasuk/editbarangmasuk', $data);
        $this->load->view('template/footer');
	}

	function update(){
		$id_barangmasuk			= $this->input->post('id_barangmasuk');
		$tgl_masuk				= $this->input->post('tgl_masuk');
		$id_supplier			= $this->input->post('id_supplier');
		$id_barang				= $this->input->post('id_barang');
		$id_pegawai				= $this->input->post('id_pegawai');
		$berat					= $this->input->post('berat');
		$harga_beli				= $this->input->post('harga_beli');
		

		$data = array(
			'id_barangmasuk'		=> $id_barangmasuk,
			'tgl_masuk' 			=> $tgl_masuk,
			'id_supplier' 			=> $id_supplier,
			'id_barang' 			=> $id_barang,
			'berat' 				=> $berat,
			'harga_beli' 			=> $harga_beli
		);

		$where = array(
			'id_barangmasuk' => $id_barangmasuk
		);

		$this->m_barangmasuk->update_data($where, $data, 'tbl_barangmasuk');
		redirect('data-master/barangmasuk');

	}
}

?>
