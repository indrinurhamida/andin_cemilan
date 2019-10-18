<?php

class Pegawai extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pegawai');
		
	}

	function index(){
		

		$data['pegawai'] = $this->m_pegawai->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/pegawai/daftarpegawai',$data);
        $this->load->view('template/footer');
	}

	function tambah(){
		// $data['kode'] = $this->m_pegawai->tampil_kode();
		$data['pegawai'] = $this->m_pegawai->tampil_pegawai()->result();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/pegawai/tambahpegawai', $data);
        $this->load->view('template/footer');

	}

	// function tambah_aksi(){
	// 	$id_barang		= $this->input->post('id_barang');
	// 	$nama_barang	= $this->input->post('nama_barang');
	// 	$stok			= $this->input->post('stok');
	// 	$deskripsi		= $this->input->post('deskripsi');
	// 	$id_barangdetail= $this->input->post('id_barangdetail');

	// 	$data = array(
	// 		'id_barang'			=> $id_barang,
	// 		'nama_barang' 		=> $nama_barang,
	// 		'stok' 				=> $stok,
	// 		'deskripsi' 		=> $deskripsi,
	// 		'id_barangdetail' 	=> $id_barangdetail
	// 	);

	// 	$this->m_barang->input_data($data, 'tbl_barang');
	// 	redirect('barang/index');
		
	// }

	// function hapus ($id=''){
	// 	$where = array('id_barang' => $id);
	// 	$this->m_barang->hapus_data($where, 'tbl_barang');
	// 	redirect('data-master/barang/index');
	// }

	function edit(){
		$where = array('id_pegawai');
		$data['pegawai'] = $this->m_pegawai->edit_data('tbl_pegawai', $where)->row_array();
		$data['data_pegawai'] = $this->m_pegawai->tampil_pegawai()->result();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/pegawai/editpegawai', $data);
        $this->load->view('template/footer');
	}

	// function update(){
	// 	$id_barang		= $this->input->post('id_barang');
	// 	$nama_barang	= $this->input->post('nama_barang');
	// 	$stok			= $this->input->post('stok');
	// 	$harga			= $this->input->post('harga');
	// 	$berat			= $this->input->post('berat');
	// 	$rasa			= $this->input->post('rasa');
	// 	$deskripsi		= $this->input->post('deskripsi');
	// 	$id_barangdetail= $this->input->post('id_barangdetail');

	// 	$data = array(
	// 		'id_barang'			=> $id_barang,
	// 		'nama_barang' 		=> $nama_barang,
	// 		'stok' 				=> $stok,
	// 		'harga' 			=> $harga,
	// 		'berat' 			=> $berat,
	// 		'rasa' 				=> $rasa,
	// 		'deskripsi' 		=> $deskripsi,
	// 		'id_barangdetail' 	=> $id_barangdetail
	// 	);

	// 	$where = array(
	// 		'id_barang' => $id
	// 	);

	// 	$this->m_barang->update_data($where, 'tbl_barang', $data);
	// 	redirect('barang/index');

	// }
}

?>