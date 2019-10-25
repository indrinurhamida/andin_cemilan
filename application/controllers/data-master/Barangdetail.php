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
        $this->load->view('template/navbar');
        $this->load->view('data-master/barangdetail/daftarbarangdetail',$data);
        $this->load->view('template/footer');
	}

	function tambah(){
		$data['kode'] = $this->m_barangdetail->tampil_kode();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/barangdetail/tambahbarangdetail', $data);
        $this->load->view('template/footer');

	}
	function tambah_aksi(){
		$id_barangdetail		= $this->input->post('id_barangdetail');
		$nama_barangdetail	= $this->input->post('nama_barangdetail');
		$harga		= $this->input->post('harga');
		$rasa= $this->input->post('rasa');
		$berat= $this->input->post('berat');
		$data = array(
			'id_barangdetail'			=> $id_barangdetail,
			'nama_barangdetail' 		=> $nama_barangdetail,
			'harga' 			=> $harga,
			'rasa' 				=> $rasa,
			'berat'				=> $berat,
		);

		$this->m_barangdetail->input_data($data, 'tbl_barangdetail');
		redirect('data-master/barangdetail');
		
	}

	function hapus ($id=''){
		$where = array('id_barangdetail' => $id);
		$this->m_barangdetail->hapus_data($where, 'tbl_barangdetail');
		redirect('data-master/barangdetail');
	}

	function edit(){
		$where = array('id_barangdetail');
		$data['barangdetail'] = $this->m_barangdetail->edit_data('tbl_barangdetail', $where)->row_array();
		$data['data_barangdetail'] = $this->m_barangdetail->tampil_barangdetail()->result();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/barangdetail/editbarangdetail', $data);
        $this->load->view('template/footer');
	}

	function update(){
		$id_barangdetail		= $this->input->post('id_barangdetail');
		$nama_barangdetail	= $this->input->post('nama_barangdetail');
		$harga			= $this->input->post('harga');
		$berat			= $this->input->post('berat');
		$rasa			= $this->input->post('rasa');

		$data = array(
			'id_barangdetail'			=> $id_barangdetail,
			'nama_barangdetail' 		=> $nama_barangdetail,
			'harga' 			=> $harga,
			'berat' 			=> $berat,
			'rasa' 				=> $rasa,
		);

		$where = array(
			'id_barangdetail' => $id_barangdetail
		);

		$this->m_barangdetail->update_data($where, 'tbl_barangdetail', $data);
		redirect('data-master/barangdetail');

	}
	}
?>