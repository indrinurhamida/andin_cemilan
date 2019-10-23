<?php  
class Supplier extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_supplier');
	}
 
	public function index() 
	{
		$data['supplier'] = $this->m_supplier->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/supplier/listSupplier',$data);
        $this->load->view('template/footer');
	}

	function tambah(){
		$data['kode'] = $this->m_supplier->tampil_kode();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/supplier/tambahSupplier', $data);
        $this->load->view('template/footer');

	}

	function tambah_aksi(){
		$id_supplier		= $this->input->post('id_supplier');
		$nama_supplier		= $this->input->post('nama_supplier');
		$alamat_supplier	= $this->input->post('alamat_supplier');
		$no_hp				= $this->input->post('no_hp');

		$data = array(
			'id_supplier'			=> $id_supplier,
			'nama_supplier' 		=> $nama_supplier,
			'alamat_supplier' 		=> $alamat_supplier,
			'no_hp' 				=> $no_hp
		);

		$this->m_supplier->input_data($data, 'tbl_supplier');
		redirect('data-master/supplier');
		
	}

	function hapus ($id=''){
		$where = array('id_supplier' => $id);
		$this->m_supplier->hapus_data($where, 'tbl_supplier');
		redirect('data-master/supplier');
	}

	function edit(){
		$where = array('id_supplier');
		$data['supplier'] = $this->m_supplier->edit_data('tbl_supplier', $where)->row_array();
		
		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/supplier/editSupplier', $data);
        $this->load->view('template/footer');
	}
	
}

?>
