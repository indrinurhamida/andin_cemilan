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
        $this->load->view('template/navbar');
        $this->load->view('data-master/barangkeluar/daftarbarangkeluar',$data);
        $this->load->view('template/footer');
    }
    
    function tambah(){
		$data['kode'] = $this->m_barangkeluar->tampil_kode();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/barangkeluar/tambahbarangkeluar', $data);
        $this->load->view('template/footer');

	}

	function tambah_aksi(){
		$id_barangkeluar		= $this->input->post('id_barangkeluar');
		$tgl_barangkeluar		= $this->input->post('tgl_barangkeluar');
		$nama_pegawai			= $this->input->post('nama_pegawai');
		$total_barangkeluar		= $this->input->post('total_barangkeluar');
		$id_pegawai				= $this->input->post('id_pegawai');

		$data = array(
			'id_barangkeluar'			=> $id_barangkeluar,
			'tgl_barangkeluar' 			=> $tgl_barangkeluar,
			'nama_pegawai' 				=> $nama_pegawai,
			'total_barangkeluar' 		=> $total_barangkeluar,
			'id_pegawai' 				=> $id_pegawai
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

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/barangkeluar/editbarang', $data);
        $this->load->view('template/footer');
	}

	function update(){
		$id_barangkeluar		= $this->input->post('id_barangkeluar');
		$tgl_barangkeluar		= $this->input->post('tgl_barangkeluar');
		$nama_pegawai			= $this->input->post('nama_pegawai');
		$total_barangkeluar		= $this->input->post('total_barangkeluar');
		$id_pegawai				= $this->input->post('id_pegawai');

		$data = array(
			'id_barangkeluar'			=> $id_barangkeluar,
			'tgl_barangkeluar' 			=> $tgl_barangkeluar,
			'nama_pegawai' 				=> $nama_pegawai,
			'total_barangkeluar' 		=> $total_barangkeluar,
			'id_pegawai' 				=> $id_pegawai
		);

		$where = array(
			'id_barangkeluar' => $id_barangkeluar
		);

		$this->m_barangkeluar->update_data($where, $data, 'tbl_barangkeluar');
		redirect('data-master/barangkeluar');

	}
}

?>