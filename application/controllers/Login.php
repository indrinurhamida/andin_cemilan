<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }
 
    function index(){
        $this->load->view('v_login');
    }
 
    function auth(){
        $username  =  htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password  =  htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_pegawai =  $this->m_login->auth_pegawai($username,$password);
 
        if($cek_pegawai->num_rows() > 0){ //jika login sebagai pegawai
                        $data  =$cek_pegawai->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['level']=='1'){ //Akses admin
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_id',$data['id_akun']);
                    $this->session->set_userdata('ses_nama',$data['username']);
                    redirect('page');
 
                 }else{ //akses pegawai
                    $this->session->set_userdata('akses','2');
                                $this->session->set_userdata('ses_id',$data['id_akun']);
                    $this->session->set_userdata('ses_nama',$data['username']);
                    redirect('page');
                 }
 
        }else{ //jika login sebagai gudang
                    $cek_admin = $this->m_login->auth_gudang($username,$password);
                    if($cek_gudang->num_rows() > 0){
                            $data = $cek_gudang->row_array();
                    $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('akses','3');
                            $this->session->set_userdata('ses_id',$data['id_akun']);
                            $this->session->set_userdata('ses_nama',$data['username']);
                            redirect('page');
                    }else{  // jika username dan password tidak ditemukan atau salah
                            $url=base_url();
                            echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                            redirect($url);
                    }
        }
 
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('m_login');
        redirect($url);
    }
 
}