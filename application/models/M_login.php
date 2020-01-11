<?php
defined ('BASEPATH') OR exit ('No direct script acess allowed');

class M_login extends CI_Model{

    public function login($post){
        $this->db->select('*');
        $this->db->from('tbl_akun');
        $this->db->where('username', $post['username']);
        $this->db->where('password', $post['password']);
        $query = $this->db->get();
        return $query;
    } 

}


