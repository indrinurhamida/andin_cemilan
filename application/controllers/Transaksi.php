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
        $this->load->model('m_pegawai');
        $data['transaksi'] = $this->m_transaksi->tampil_data()->result();
        $data['barangdetail'] = $this->m_barangdetail->tampil_data()->result();
        $data['member'] = $this->m_member->tampil_data()->result();
        $data['pegawai'] = $this->m_pegawai->tampil_data()->result();
        $data['kode1'] = $this->m_transaksi->tampil_kode1();

        $this->load->view('template/header');
        if($this->session->userdata('jabatan') == "kasir"){
               $this->load->view('template_login/navbar_kasir');
            }elseif ($this->session->userdata('jabatan') == "admin") {
                $this->load->view('template/navbar');
            }
        $this->load->view('transaksi/tamkasir', $data);
        $this->load->view('template/footer');
    }

    //function tambah(){
	   //$data['kode'] = $this->m_transaksi->tampil_kode();

	   //$this->load->view('template/header');
       //$this->load->view('template/navbar');
       //$this->load->view('transaksi/tamkasir', $data);
       //$this->load->view('template/footer');

    //}
    function add()

    {   
        //echo "<pre>";
        //print_r($_POST);
        //echo "</pre>";
        $qty = array_sum($_POST['qty']);
        $total = array_sum($_POST['subtotal']);
        $data = array(
            "id_transaksi"          => $_POST["id_transaksi"],
            "id_member"             => $_POST["id_member"],
            "tgl_transaksi"         => $_POST["tgl_transaksi"],
            "id_pegawai"            => $_POST["id_pegawai"],
            "qty"                   => $qty,
            "total"                 => $total,
            "jumlah_bayar"          => $_POST["jumlah_bayar"],
            "kembalian"             => $_POST["kembalian"]
        );
    $this->m_transaksi->input_data($data, "tbl_transaksi");
    $this->db->query("update tbl_member set point = point + 1 where id_member = '$data[id_member]'");


    $lastId = $this->m_transaksi->lastId()[0];
    foreach ($_POST['id_barangdetail'] as $key => $value) {
        $arr = array(
            'id_transaksi' => $lastId['id_transaksi'],
            'id_barangdetail' => $value,
            'qty' => $_POST['qty'][$key],
            'subtotal' => $_POST['subtotal'][$key]
        );
        $this->db->insert("tbl_transaksidetail", $arr);
        $this->db->query("update tbl_barangdetail set stok = stok - $arr[qty] where id_barangdetail = '$arr[id_barangdetail]'");
        
    }
        redirect(base_url()."transaksi");
    }
    
    function kode_barang(){
        $this->load->model('m_barangdetail');
        $kode = $_POST["kode_barang"];
        $detailbarang = $this->m_barangdetail->ambil_satu_data($kode)->result();
        $barang = array();
        foreach($detailbarang as $val) {
        $array = array(
                "id_barangdetail" => $val->id_barangdetail,
                "nama_barang" => $val->nama_barang,
                "id_rasa" => $val->id_rasa,
                "berat" => $val->berat,
                "harga" => $val->harga,
                "stok" => $val->stok
            );
        $barang[] = $array;
        }
        echo json_encode($barang);
       
    }

    function hapus ($id=''){
        $where = array('id_barangdetail' => $id);
        $this->m_transaksi->hapus_data($where, 'tbl_transaksi');
    }

}
