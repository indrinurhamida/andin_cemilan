<?php

class Akun extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_akun');
		
	}

	function index(){
		

		$data['akun'] = $this->m_akun->tampil_akun()->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/akun/daftarakun',$data);
        $this->load->view('template/footer');
	}

	function tambah(){
		// $data['kode'] = $this->m_pegawai->tampil_kode();
		$data['akun'] = $this->m_akun->tampil_akun()->result();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/akun/tambahakun', $data);
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
		$where = array('id_akun');
		$data['akun'] = $this->m_akun->edit_data('tbl_akun', $where)->row_array();
		$data['data_akun'] = $this->m_akun->tampil_akun()->result();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/akun/editakun', $data);
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