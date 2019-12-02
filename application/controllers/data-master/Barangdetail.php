<?php

	class Barangdetail extends CI_Controller
	{
		function __construct(){
        parent::__construct();
        $this->load->model('m_barangdetail');
	}

	function index(){
		
		$data['barangdetail'] = $this->m_barangdetail->tampil_data()->result();
        $this->load->view('template/header');
        if($this->session->set_userdata('jabatan','gudang')){

			// jika yang login adalah admin maka menggunakan navbar_gudang
			
			$this->load->view('template_login/navbar_gudang');
			

		} elseif ($this->session->set_userdata('jabatan','admin')) {

			// jika yang login adalah pegawai maka menggunakan navbar_admin
			
			$this->load->view('template_login/navbar_admin');
			

		} else {
			
			// jika yang login adalah gudang maka menggunakan navbar_pegawai
			$this->load->view('template_login/navbar_pegawai');
		}
        $this->load->view('data-master/barangdetail/daftarbarangdetail',$data);
        $this->load->view('template/footer');
	}

	function tambah(){
		$data['kode'] = $this->m_barangdetail->tampil_kode();
		$data['barangdetail'] = $this->m_barangdetail->tampil_barang();
		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/barangdetail/tambahbarangdetail', $data);
        $this->load->view('template/footer');

	}
	function tambah_aksi(){
		$id_barangdetail		= $this->input->post('id_barangdetail');
		$id_barang				= $this->input->post('id_barang');
		$berat					= $this->input->post('berat');
		$harga					= $this->input->post('harga');
		$stok					= $this->input->post('stok');

		$data = array(
			'id_barangdetail'			=> $id_barangdetail,
			'id_barang' 				=> $id_barang,
			'berat'						=> $berat,
			'harga' 					=> $harga,
			'stok' 						=> $stok,
		);

		$this->m_barangdetail->input_data($data, 'tbl_barangdetail');
		redirect('data-master/barangdetail');	
	}

	function hapus ($id=''){
		$where = array('id_barangdetail' => $id);
		$this->m_barangdetail->hapus_data($where, 'tbl_barangdetail');
		redirect('data-master/barangdetail');
	}

	function edit($id){
		$where = array('id_barangdetail' =>$id);
        $data['ambil_barangdetail'] = $this->m_barangdetail->tampil_barang();
		$data['barangdetail'] = $this->m_barangdetail->edit_data('tbl_barangdetail', $where)->row_array();
		print_r($data["barangdetail"]);

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/barangdetail/editbarangdetail', $data);
        $this->load->view('template/footer');
	}

	function update(){
		$id_barangdetail		= $this->input->post('id_barangdetail');
		$id_barang				= $this->input->post('id_barang');
		$berat					= $this->input->post('berat');
		$harga					= $this->input->post('harga');
		$stok					= $this->input->post('stok');

		$data = array(
			'id_barangdetail'			=> $id_barangdetail,
			'id_barang' 				=> $id_barang,
			'berat'						=> $berat,
			'harga' 					=> $harga,
			'stok' 						=> $stok,
		);
		$where = array(
			'id_barangdetail' => $id_barangdetail
		);

		$this->m_barangdetail->update_data($where, $data, 'tbl_barangdetail');
		redirect('data-master/barangdetail');

	}
}
?>
