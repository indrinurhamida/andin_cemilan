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
        $this->load->view('template/navbar');
        $this->load->view('data-master/pergudangan/barangmasuk/daftarbarangmasuk',$data);
        $this->load->view('template/footer');
	}

	function tambah(){
		// $data['kode'] = $this->m_barangmasuk->tampil_kode();
		$data['barangmasuk'] = $this->m_barangmasuk->tampil_barangmasuk()->result();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/pergudangan/barangmasuk/tambahbarangmasuk', $data);
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
		$where = array('id_brgmasuk');
		$data['barangmasuk'] = $this->m_brgmasuk->edit_data('tbl_barangmasuk', $where)->row_array();
		$data['data_barangmasuk'] = $this->m_brgmasuk->tampil_brgmasuk()->result();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/pergudangan/barangmasuk/editbarangmasuk', $data);
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