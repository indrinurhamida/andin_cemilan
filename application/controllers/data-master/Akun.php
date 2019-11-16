<?php  
class Akun extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_akun');
	}
 
	public function index() 
	{
		$data['akun'] = $this->m_akun->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/akun/daftarakun',$data);
        $this->load->view('template/footer');
	}

	function tambah(){
		$data['kode'] = $this->m_akun->tampil_kode();
		$data['pegawai'] = $this->m_akun->getPegawai();
		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/akun/tambahakun', $data);
        $this->load->view('template/footer');

	}

	function tambah_aksi(){
		$id_akun			= $this->input->post('id_akun');
		$username			= $this->input->post('username');
		$password			= $this->input->post('password');
		$jabatan			= $this->input->post('jabatan');
		$id_pegawai			= $this->input->post('id_pegawai');

		$data = array(
			'id_akun'				=> $id_akun,
			'username' 				=> $username,
			'password' 				=> $password,
			'jabatan' 				=> $jabatan,
			'id_pegawai' 			=> $id_pegawai,
		);

		$this->m_akun->input_data($data, 'tbl_akun');
		redirect('data-master/akun');
		
	}

	function hapus ($id=''){
		$where = array('id_akun' => $id);
		$this->m_akun->hapus_data($where, 'tbl_akun');
		redirect('data-master/akun');
	}

	function edit($id){
		$where = array('id_akun' =>$id);
		$data['pegawai'] = $this->m_akun->getPegawai();
		$data['akun'] = $this->m_akun->edit_data('tbl_akun', $where)->row_array();
		$data['data_akun'] = $this->m_akun->tampil_akun()->result();
		
		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/akun/editakun', $data);
        $this->load->view('template/footer');
	}
	function update(){
		$id_akun			= $this->input->post('id_akun');
		$username			= $this->input->post('username');
		$password			= $this->input->post('password');
		$jabatan			= $this->input->post('jabatan');
		$id_pegawai			= $this->input->post('id_pegawai');
		
		$data = array(
			'id_akun'		=> $id_akun,
			'username' 		=> $username,
			'password' 		=> $password,
			'jabatan' 		=> $jabatan,
			'id_pegawai' 	=> $id_pegawai,
			
		);

		$where = array(
			'id_akun' => $id_akun
		);

		$this->m_akun->update_data($where, $data,  'tbl_akun');
		redirect('data-master/akun');

	}
}

?>

