<?php

        class M_kasir extends CI_Model
        {
            public function __construct(){
                parent::__construct();
            }
    
            public function getAllBarang(){
                $this->db->select('*');
                $this->db->from('barang');

                return $this->db->get();
            }

            public function getBarang($kode){
                $this->db->where('kode', $kode);
                $this->db->select('*');
                $this->db->from('barang');

                return $this->db->get();
            }

            public function addBarang($barang){
                $this->db->insert('barang', $barang);
            }

            public function updateBarang($barang, $kodisi){
                $this->db->where($kondisi);
                $this->db->update('barang', $barang);
            }

            public function deleteBarang($kode){
                $this->db->where('$kode', $kode);
                $this->db->delete('$barang');
            }

        }
?>