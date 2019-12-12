<?php

class Transaksi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_transaksi');
    }
    public function index()
    {
        $this->load->model('m_barangdetail');
        $this->load->model('m_member');
        $data['transaksi'] = $this->m_transaksi->tampil_data()->result();
        $data['barangdetail'] = $this->m_barangdetail->tampil_data()->result();
        $data['member'] = $this->m_member->tampil_data()->result();


        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('transaksi/tamkasir', $data);
        $this->load->view('template/footer');
    }

    function tambah(){
		$data['kode'] = $this->m_transaksi->tampil_kode();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('transaksi/tamkasir', $data);
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
    
        $this->m_pegawai->input_data($data, 'tbl_pegawai');
        redirect('data-master/pegawai');
            
        }
    

}
