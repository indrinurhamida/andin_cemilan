<?php

class Pegawai extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('M_pegawai');
	}

	function index(){
		$data['pegawai'] = $this->M_pegawai->tampil_data()->result();
    	$this->load->view('template/header');
    	$this->load->view('template/navbar');
       	$this->load->view('data-master/pegawai/daftarpegawai',$data);
       	$this->load->view('template/footer');
	}

	function tambah(){
		$data['pegawai'] = $this->M_pegawai->tambah()->result();
		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/pegawai/tambahpegawai', $data);
        $this->load->view('template/footer');

	}

	function tambah_aksi(){
	$id_pegawai		= $this->input->post('id_pegawai');
	$nama_pegawai	= $this->input->post('nama_pegawai');
	$alamat			= $this->input->post('alamat');
	$email			= $this->input->post('email');
	$no_hp			= $this->input->post('no_hp');

	$data = array(
	'id_pegawai'		=> $id_pegawai,
	'nama_pegawai' 		=> $nama_pegawai,
	'alamat' 			=> $alamat,
	'email' 			=> $email,
	'no_hp' 			=> $no_hp,
	);

	$this->M_pegawai->input_data($data, 'tbl_pegawai');
	redirect('data-master/pegawai');
		
	}

	function hapus ($id=''){
		$where = array('id_pegawai' => $id);
		$this->M_pegawai->hapus_data($where, 'tbl_pegawai');
		redirect('data-master/pegawai');
	}

	function edit(){
		$where = array('id_pegawai');
		$data['pegawai'] = $this->M_pegawai->edit_data('tbl_pegawai', $where)->row_array();
		$data['data_pegawai'] = $this->M_pegawai->tampil_pegawai()->result();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/pegawai/editpegawai', $data);
        $this->load->view('template/footer');
	}

	function update(){
	$id_barang		= $this->input->post('id_pegawai');
	$nama_barang	= $this->input->post('nama_pegawai');
	$alamat			= $this->input->post('alamat');
	$email			= $this->input->post('email');
	$no_hp			= $this->input->post('no_hp');
	

	$data = array(
	'id_pegawai'		=> $id_pegawai,
	'nama_pegawai' 		=> $nama_pegawai,
	'alamat' 			=> $alamat,
	'email' 			=> $email,
	'no_hp' 			=> $no_hp,
	
	);

	$where = array(
	'id_pegawai' => $id
	);

	$this->M_pegawai->update_data($where, 'tbl_pegawai', $data);
	redirect('pegawai/index');

	}
}

?>
