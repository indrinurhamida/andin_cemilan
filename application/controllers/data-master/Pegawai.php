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
    	$this->load->view('template_login/navbar_owner');
       	$this->load->view('data-master/pegawai/daftarpegawai',$data);
       	$this->load->view('template/footer');
	}

	function tambah(){
		$data['kode'] = $this->m_pegawai->tampil_kode();
		$this->load->view('template/header');
        $this->load->view('template_login/navbar_owner');
        $this->load->view('data-master/pegawai/tambahpegawai', $data);
        $this->load->view('template/footer');

	}

	function tambah_aksi(){
	$id_pegawai		= $this->input->post('id_pegawai');
	$nama_pegawai	= $this->input->post('nama_pegawai');
	$alamat			= $this->input->post('alamat');
	$akses			= $this->input->post('akses');
	$no_hp			= $this->input->post('no_hp');

	$data = array(
	'id_pegawai'		=> $id_pegawai,
	'nama_pegawai' 		=> $nama_pegawai,
	'alamat' 			=> $alamat,
	'akses' 			=> $akses,
	'no_hp' 			=> $no_hp,
	);

	$this->m_pegawai->input_data($data, 'tbl_pegawai');
	redirect('data-master/pegawai');
		
	}

	function hapus ($id=''){
		$where = array('id_pegawai' => $id);
		$this->m_pegawai->hapus_data($where,'tbl_pegawai');
		redirect('data-master/pegawai');
	}

	function edit($id){
		$where = array('id_pegawai'=>$id);
		$data['pegawai'] = $this->m_pegawai->edit_data('tbl_pegawai', $where)->row_array();

		$this->load->view('template/header');
        $this->load->view('template_login/navbar_owner');
        $this->load->view('data-master/pegawai/editpegawai', $data);
        $this->load->view('template/footer');
	}

	function update(){
	$id_pegawai		= $this->input->post('id_pegawai');
	$nama_pegawai	= $this->input->post('nama_pegawai');
	$alamat			= $this->input->post('alamat');
	$akses			= $this->input->post('akses');
	$no_hp			= $this->input->post('no_hp');
	

	$data = array(
	'id_pegawai'		=> $id_pegawai,
	'nama_pegawai' 		=> $nama_pegawai,
	'alamat' 			=> $alamat,
	'akses' 			=> $akses,
	'no_hp' 			=> $no_hp,
	
	);

	$where = array(
	'id_pegawai' => $id_pegawai
	);

	$this->m_pegawai->update_data($where, $data, 'tbl_pegawai');
	redirect('data-master/pegawai');

	}
}

?>
