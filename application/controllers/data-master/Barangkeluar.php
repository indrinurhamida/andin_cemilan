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
		$id_barang		= $this->input->post('id_barang');
		$nama_barang	= $this->input->post('nama_barang');
		$stok			= $this->input->post('stok');
		$deskripsi		= $this->input->post('deskripsi');
		$id_barangdetail= $this->input->post('id_barangdetail');

		$data = array(
			'id_barang'			=> $id_barang,
			'nama_barang' 		=> $nama_barang,
			'stok' 				=> $stok,
			'deskripsi' 		=> $deskripsi,
			'id_barangdetail' 	=> $id_barangdetail
		);

		$this->m_barang->input_data($data, 'tbl_barangkeluar');
		redirect('data-master/barangkeluar');
		
	}

	function hapus ($id=''){
		$where = array('id_barangkeluar' => $id);
		$this->m_barang->hapus_data($where, 'tbl_barangkeluar');
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
		$id_barang		= $this->input->post('id_barang');
		$nama_barang	= $this->input->post('nama_barang');
		$stok			= $this->input->post('stok');
		$deskripsi		= $this->input->post('deskripsi');
		$id_barangdetail= $this->input->post('id_barangdetail');

		$data = array(
			'id_barang'			=> $id_barang,
			'nama_barang' 		=> $nama_barang,
			'stok' 				=> $stok,
			'deskripsi' 		=> $deskripsi,
			'id_barangdetail' 	=> $id_barangdetail
		);

		$where = array(
			'id_barang' => $id_barang
		);

		$this->m_barang->update_data($where, $data, 'tbl_barangkeluar');
		redirect('data-master/barangkeluar');

	}
}

?>