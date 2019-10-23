<?php

class Barang extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_barang');
		
	}

	function index(){
		

		$data['barang'] = $this->m_barang->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/barang/daftarbarang',$data);
        $this->load->view('template/footer');
	}

	function tambah(){
		$data['kode'] = $this->m_barang->tampil_kode();
		$data['barangdetail'] = $this->m_barang->tampil_barangdetail()->result();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/barang/tambahbarang', $data);
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

		$this->m_barang->input_data($data, 'tbl_barang');
		redirect('data-master/barang');
		
	}

	function hapus ($id=''){
		$where = array('id_barang' => $id);
		$this->m_barang->hapus_data($where, 'tbl_barang');
		redirect('data-master/barang');
	}

	function edit($id){
		$where = array('id_barang' => $id);
		$data['barang'] = $this->m_barang->edit_data('tbl_barang', $where)->row_array();
		$data['data_barangdetail'] = $this->m_barang->tampil_barangdetail()->result();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/barang/editbarang', $data);
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

		$this->m_barang->update_data($where, $data, 'tbl_barang');
		redirect('data-master/barang');

	}
}

?>