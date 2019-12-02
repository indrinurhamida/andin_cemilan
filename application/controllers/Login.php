<?php
class Login extends CI_Controller{

    // konstruktor (method yang dijalankan ketika class program pertama kali di jalankan)
    function __construct(){
        parent::__construct();
        $this->load->model('M_login');
    }
 
    // default fungsi 
    function index(){

        // $this->load->view('template/header');
        // $this->load->view('template/navbar');
        $this->load->view('v_login');
        // $this->load->view('template/footer');
        
    }
 
    function auth(){

        // untuk menerima data dari POST action berasal dari atribut name="" dari view
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // menganbil data dari database berdasarkan data post action 
        $cek_pegawai =  $this->M_login->auth_pegawai($username,$password);
 
        // di cek apakah ada record ? 
        if($cek_pegawai->num_rows() > 0) { 
            
            // mengambil data dalam bentuk baris record dari database
            $data  =$cek_pegawai->row_array();

            // membuat session "nama_session","value"
            $this->session->set_userdata('masuk',TRUE);

            // jika jabatan user adalah admin
            if ($data['jabatan']=='admin'){ 
            
                // membuat session dan masuk sebagai admin
                $this->session->set_userdata('jabatan','admin');
                $this->session->set_userdata('id_akun',$data['id_akun']);
                $this->session->set_userdata('username',$data['username']);

                // merujukkan ke halaman tertentu
                //echo "admin";
                redirect('admin');
 
            } else if ($data['jabatan']=='pegawai') { // jika jabatan user adalah pegawai
                
                // membuat session dan masuk sebagai admin
                $this->session->set_userdata('jabatan','pegawai');
                $this->session->set_userdata('id_akun',$data['id_akun']);
                $this->session->set_userdata('username',$data['username']);

                // merujukkan ke halaman tertentu
                //echo "pegawai";
                redirect('pegawai');
            } else if ($data['jabatan']=='gudang'){ // jika jabatan user adalah gudang

                // membuat session dan masuk sebagai admin
                $this->session->set_userdata('jabatan','gudang');
                $this->session->set_userdata('id_akun',$data['id_akun']);
                $this->session->set_userdata('username',$data['username']);

                // merujukkan ke halaman tertentu
                //echo "gudang";
                redirect('gudang');

            } else { // jika username dan password tidak ditemukan atau salah

                $url=base_url();
                // echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                echo "salah boss";
                // redirect('page');
            }
 
        } 
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('M_login');
        redirect($url);
    }
 
}