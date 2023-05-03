<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubarang_model extends CI_Model {

  public function getbarang()
    {
        $data_barang= $this->db->where('nama_pembeli', $this->session->userdata('username'))->get('barang')->result();
    return $data_barang; 
    }
    
    public function detailBarang($id_barang)
    {
        $detail = $this->db->where('id_barang',$id_barang)->get('barang')->row();
        return $detail;
    }

    public function search()
    {
        $detail = $this->db->where('nama',$this->input->post('search'))->get('barang')->result();
        return $detail;
    }   

}
