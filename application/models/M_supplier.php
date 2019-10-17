<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_supplier extends CI_Model {

    function tampil_data(){
        return $this->db->get('tbl_supplier');
    }

    function input_data($data, $table){
        $this->db->insert($table, $data);
    }

    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

}
