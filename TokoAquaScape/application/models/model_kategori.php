<?php 

class Model_kategori extends CI_Model{
    public function data_elektronik(){
        return $this->db->get_where("tbbarang",array('kategori' => 'elektronik'));
    }

    public function data_alat_pancing(){
        return $this->db->get_where("tbbarang",array('kategori' => 'alat pancing'));
    }

    public function data_makanan_ikan(){
        return $this->db->get_where("tbbarang",array('kategori' => 'makanan ikan'));
    }

    public function data_macam_aquarium(){
        return $this->db->get_where("tbbarang",array('kategori' => 'macam aquarium'));
    }

    public function data_spesies_ikan(){
        return $this->db->get_where("tbbarang",array('kategori' => 'spesies ikan'));
    }
}
