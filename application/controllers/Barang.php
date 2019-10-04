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
        $this->load->view('barang/daftarbarang',$data);
        $this->load->view('template/footer');
	}

	function tambah(){
		$data['kode'] = $this->m_barang->tampil_kode();
		$data['barangdetail'] = $this->m_barang->tampil_barangdetail()->result();
		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('barang/tambahbarang', $data);
        $this->load->view('template/footer');

	}

	function tambah_aksi(){
		$id_barang		= $this->input->post('id_barang');
		$nama_barang	= $this->input->post('nama_barang');
		$stok			= $this->input->post('stok');
		$harga			= $this->input->post('harga');
		$berat			= $this->input->post('berat');
		$rasa			= $this->input->post('rasa');
		$deskripsi		= $this->input->post('deskripsi');
		$id_barangdetail= $this->input->post('id_barangdetail');

		$data = array(
			'id_barang'			=> $id_barang,
			'nama_barang' 		=> $nama_barang,
			'stok' 				=> $stok,
			'harga' 			=> $harga,
			'berat' 			=> $berat,
			'rasa' 				=> $rasa,
			'deskripsi' 		=> $deskripsi,
			'id_barangdetail' 	=> $id_barangdetail
		);

		$this->m_barang->input_data($data, 'tbl_barang');
		redirect('barang/index');
		
	}
}

?>