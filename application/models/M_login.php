<?php
class M_login extends CI_Model{
    //cek pegawai
    function auth_pegawai($username,$password){
        $query = $this->db->query("SELECT * FROM akun WHERE username='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }
 
    //cek gudang
    function auth_gudang($username,$password){
        $query = $this->db->query("SELECT * FROM akun WHERE ='$username' AND pass=MD5('$password') LIMIT 1");
        return $query;
    }
 
}