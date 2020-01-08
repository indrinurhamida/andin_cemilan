<?php  
class costemer extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_costemer');
	}
 
	public function index() 
	{
		$data['costemer'] = $this->m_costemer->tampil_data()->result();
        $this->load->view('template/header');
        if($this->session->set_userdata('jabatan','admin')){

			// jika yang login adalah admin maka menggunakan navbar_gudang
			
			$this->load->view('template_login/navbar_admin');
			

		} elseif ($this->session->set_userdata('jabatan','pegawai')) {

			// jika yang login adalah pegawai maka menggunakan navbar_admin
			
			$this->load->view('template_login/navbar_pegawai');
			

		} else {
			
			// jika yang login adalah gudang maka menggunakan navbar_pegawai
			$this->load->view('template_login/navbar_gudang');
		}
        $this->load->view('data-master/costemer/daftarcostemer',$data);
        $this->load->view('template/footer');
	}

	function tambah(){
		$data['kode'] = $this->m_costemer->tampil_kode();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/costemer/tambahcostemer', $data);
        $this->load->view('template/footer');

	}

	function tambah_aksi(){
		$id_costemer		= $this->input->post('id_costemer');
		$nama_costemer		= $this->input->post('nama_costemer');
		$alamat_costemer	= $this->input->post('alamat_costemer');
		$no_hp				= $this->input->post('no_hp');

		$data = array(
			'id_costemer'			=> $id_costemer,
			'nama_costemer' 		=> $nama_costemer,
			'alamat_costemer' 		=> $alamat_costemer,
			'no_hp' 				=> $no_hp
		);

		$this->m_costemer->input_data($data, 'tbl_costemer');
		redirect('data-master/costemer');
		
	}

	function hapus ($id=''){
		$where = array('id_costemer' => $id);
		$this->m_costemer->hapus_data($where, 'tbl_costemer');
		redirect('data-master/costemer');
	}

	function edit($id){
		$where = array('id_costemer' => $id);
		$data['costemer'] = $this->m_costemer->edit_data('tbl_costemer', $where)->row_array();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/costemer/editcostemer', $data);
        $this->load->view('template/footer');
	}

	function update(){
		$id_costemer		= $this->input->post('id_costemer');
		$nama_costemer		= $this->input->post('nama_costemer');
		$alamat_costemer	= $this->input->post('alamat_costemer');
		$no_hp				= $this->input->post('no_hp');

		$data = array(
			'id_costemer'			=> $id_costemer,
			'nama_costemer' 		=> $nama_costemer,
			'alamat_costemer' 		=> $alamat_costemer,
			'no_hp' 				=> $no_hp
		);

		$where = array(
			'id_costemer' => $id_costemer
		);

		$this->m_costemer->update_data($where, $data, 'tbl_costemer');
		redirect('data-master/costemer');

	}
}

?>
