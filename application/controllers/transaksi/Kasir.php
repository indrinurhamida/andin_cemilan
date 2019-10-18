<?php

class Kasir extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_kasir');
	}
	
	function index()
    {
        $data['barangdetail'] = $this->m_kasir->get_barangdetail_all();
        $data['barang'] = $this->m_kasir->get_barang($data);
        $this->load->view('kasir/index', $data);
    }

	
}

?>

