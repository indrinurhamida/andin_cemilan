<?php  
class Member extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_member');
	}
 
	public function index() 
	{
		$data['member'] = $this->m_member->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/member/daftarmember',$data);
        $this->load->view('template/footer');
	}

	function tambah(){
		$data['kode'] = $this->m_member->tampil_kode();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/member/tambahmember', $data);
        $this->load->view('template/footer');

	}

	function tambah_aksi(){
		$id_member			= $this->input->post('id_member');
		$nama_member		= $this->input->post('nama_member');
		$email 				= $this->input->post('email');
		$alamat 			= $this->input->post('alamat');
		$no_hp				= $this->input->post('no_hp');

		$data = array(
			'id_member'			=> $id_member,
			'nama_member' 		=> $nama_member,
			'email'				=> $email,
			'alamat' 			=> $alamat,
			'no_hp' 			=> $no_hp
		);

		$this->m_member->input_data($data, 'tbl_member');
		redirect('data-master/member');
		
	}

	function hapus ($id=''){
		$where = array('id_member' => $id);
		$this->m_member->hapus_data($where, 'tbl_member');
		redirect('data-master/member');
	}

	function edit($id){
		$where = array('id_member' => $id);
		$data['member'] = $this->m_member->edit_data('tbl_member', $where)->row_array();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data-master/member/editSupplier', $data);
        $this->load->view('template/footer');
	}

	function update(){
		$id_member			= $this->input->post('id_member');
		$nama_member		= $this->input->post('nama_member');
		$email 				= $this->input->post('email');
		$alamat				= $this->input->post('alamat');
		$no_hp				= $this->input->post('no_hp');

		$data = array(
			'id_member'			=> $id_member,
			'nama_member' 		=> $nama_member,
			'email'				=> $email,
			'alamat' 			=> $alamat,
			'no_hp' 			=> $no_hp,
		);

		$where = array(
			'id_member' => $id_member
		);

		$this->m_member->update_data($where, $data, 'tbl_member');
		redirect('data-master/member');

	}
}

?>
