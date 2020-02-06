<?php

class Barangkeluar extends CI_Controller
    {
	function __construct(){
		parent::__construct();
		$this->load->model('m_barangkeluar');
		
	}

    function index()
    {
		$data['barangkeluar'] = $this->m_barangkeluar->tampil_data()->result();
        $this->load->view('template/header');
        if($this->session->userdata('jabatan') == "kasir"){
        	   $this->load->view('template_login/navbar_kasir');
        	}elseif($this->session->userdata('jabatan') == "gudang"){
        	   $this->load->view('template_login/navbar_gudang');
        	}elseif ($this->session->userdata('jabatan') == "admin") {
        		$this->load->view('template/navbar');
        	}
        $this->load->view('data-master/barangkeluar/daftarbarangkeluar',$data);
        $this->load->view('template/footer');
    }
    
    function tambah(){
		$data['kode'] = $this->m_barangkeluar->tampil_kode();
		$data['rasa'] = $this->m_barangkeluar->getRasa();
		//$data['barang'] = $this->m_barangkeluar->getBarang();
		//$data['detailbarang'] = $this->m_barangkeluar->getDetailbarang();
		$this->load->view('template/header');
        if($this->session->userdata('jabatan') == "kasir"){
        	   $this->load->view('template_login/navbar_kasir');
        	}elseif($this->session->userdata('jabatan') == "gudang"){
        	   $this->load->view('template_login/navbar_gudang');
        	}elseif ($this->session->userdata('jabatan') == "admin") {
        		$this->load->view('template/navbar');
        	}
        $this->load->view('data-master/barangkeluar/tambahbarangkeluar', $data);
        $this->load->view('template/footer');

	}

	function tambah_aksi(){
		$id_barangkeluar		= $this->input->post('id_barangkeluar');
		$nama_barangkeluar		= $this->input->post('nama_barangkeluar');
		$id_rasa				= $this->input->post('id_rasa');
		$tgl_keluar				= $this->input->post('tgl_keluar');
		//$nama_pegawai			= $this->input->post('nama_pegawai');
		$stok					= $this->input->post('stok');
		//$id_pegawai				= $this->input->post('id_pegawai');
		//$id_barangdetail		= $this->input->post('id_barangdetail');

		$data = array(
			'id_barangkeluar'			=> $id_barangkeluar,
			'nama_barangkeluar'			=> $nama_barangkeluar,
			'id_rasa'					=> $id_rasa,
			'tgl_keluar' 				=> $tgl_keluar,
			//'nama_pegawai' 				=> $nama_pegawai,
			'stok' 						=> $stok,
			//'id_pegawai' 				=> $id_pegawai
			//'id_barangdetail'			=> $id_barangdetail
		);

		$this->m_barangkeluar->input_data($data, 'tbl_barangkeluar');
		redirect('data-master/barangkeluar');
		
	}

	function hapus ($id=''){
		$where = array('id_barangkeluar' => $id);
		$this->m_barangkeluar->hapus_data($where, 'tbl_barangkeluar');
		redirect('data-master/barangkeluar');
	}

	function edit($id){
		$where = array('id_barangkeluar' => $id);
		$data['barangkeluar'] = $this->m_barangkeluar->edit_data('tbl_barangkeluar', $where)->row_array();
		$data['rasa'] = $this->m_barangkeluar->getRasa();

		$this->load->view('template/header');
        if($this->session->userdata('jabatan') == "kasir"){
        	   $this->load->view('template_login/navbar_kasir');
        	}elseif($this->session->userdata('jabatan') == "gudang"){
        	   $this->load->view('template_login/navbar_gudang');
        	}elseif ($this->session->userdata('jabatan') == "admin") {
        		$this->load->view('template/navbar');
        	}
        $this->load->view('data-master/barangkeluar/editbarangkeluar', $data);
        $this->load->view('template/footer');
	}

	function update(){
		$id_barangkeluar		= $this->input->post('id_barangkeluar');
		$nama_barangkeluar		= $this->input->post('nama_barangkeluar');
		$id_rasa				= $this->input->post('id_rasa');
		$tgl_keluar				= $this->input->post('tgl_keluar');
		//$nama_pegawai			= $this->input->post('nama_pegawai');
		$stok					= $this->input->post('stok');
		//$id_pegawai				= $this->input->post('id_pegawai');
		//$id_barangdetail		= $this->input->post('id_barangdetail');

		$data = array(
			'id_barangkeluar'			=> $id_barangkeluar,
			'nama_barangkeluar'			=> $nama_barangkeluar,
			'id_rasa'					=> $id_rasa,
			'tgl_keluar' 				=> $tgl_keluar,
			//'nama_pegawai' 				=> $nama_pegawai,
			'stok' 						=> $stok,
			//'id_pegawai' 				=> $id_pegawai
			//'id_barangdetail'			=> $id_barangdetail
		);

		$where = array(
			'id_barangkeluar' => $id_barangkeluar
		);

		$this->m_barangkeluar->update_data($where, $data, 'tbl_barangkeluar');
		redirect('data-master/barangkeluar');

	}
}

?>