<?php
    class Kasir extends CI_Controller
    {
        public function __construct(){
            parent::__construct();
            if(!$this->session->userdata('username'))
            {
                redirect('login');
            }
            $this->load->model('M_kasir');
        }
        public function index()
        {
            $data['daftarbarang'] = $this->M_kasir->getAllBarang();
            $this->load->view('login/index', $data);
        }
        public function dataBarang()
        {
            $this->halaman = 'Data Barang';
            $halaman = $this->halaman;
            $this->load->helper('url');

            $data = $this->db->get('barang')->result_array();
            $jumlah = $this->db->get('barang')->num_rows();
            $main_view = 'barang/tampil';
            $this->load->view('template', compact('halaman', 'main_view', 'data', 'jumlah'));
        }
        public function tambahbarang();
        {
            $this->halaman = 'Tambah Data Barang';
            $halaman = $this->halaman;
            $this->load->helper('url');
            $this->load->helper('url');

            $heading = 'Tambah Data barang';
            $main_view = 'barang/tambah';
            $this->load->view('template', compact{'halaman', 'main_view'});
        }
        public function editbarang($kode)
        {}
    }
?>