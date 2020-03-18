<?php

class Tagihan_pln extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tb_listrik');
    }

    public function tambah_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_data($where,$table){
       return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}

//dihalaman ini merupakan model untuk controller tagihan pln 