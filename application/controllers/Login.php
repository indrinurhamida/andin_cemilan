<?php
defined ('BASEPATH') OR exit ('No direct script acess allowed');

class Login extends CI_Controller{

    //default fungsi
    public function index(){
        check_already_login();
        $this->load->view('v_login');
    }

    //proses
    public function proses(){
        $post = $this->input->post(null, TRUE);
        if(isset($post['v_login'])) {
            $this->load->model('M_login');
            $query = $this->M_login->login($post);
            if($query->num_rows() > 0){
                //echo "login berhasil";
                $row = $query->row();
                    //echo $row->username;
                $params = array(
                    'id_akun' => $row->id_akun,
                    'jabatan' => $row->jabatan
                );
                $this->session->set_userdata($params);
                echo "<script> 
                        alert('Selamat, Login Berhasil!');
                        window.location='".base_url('welcome')."';
                     </script>";
            }else{
                //echo "login gagal"; 
                echo "<script> 
                        alert('Login Gagal! Username atau Password Salah!');
                        window.location='".base_url('login')."';
                     </script>";
            }
        }
    }

    public function logout(){
        $params = array('id_akun', 'jabatan');
        $this->session->unset_userdata($params);
        redirect('login');
    }

}