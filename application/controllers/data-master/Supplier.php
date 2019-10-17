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
	
}

?>
