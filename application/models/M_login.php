<?php
class M_login extends CI_Model{
    //cek pegawai di databse
    function auth_pegawai($username,$password){
        $sql = $this->db->query("SELECT * FROM tbl_akun WHERE username='$username' AND password='$password' LIMIT 1");
        return $sql;
    }
}