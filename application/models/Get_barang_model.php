<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_barang_model extends CI_Model {

	
public function get_barang()
    {
        return $this->db->get('barang')->result();
        
        
    }

    public function cari_get_barang($id_barang)
    {
        $result = $this->db->like('id_barang',$id_barang)->get('barang')->result();
        return $result;
    }
    public function get_detail($id_barang)
    {
        $result = $this->db
        ->join('kategori','kategori.id_kategori = barang.id_kategori')
        ->where('id_barang',$id_barang)
        ->get('barang')->row();

        return $result;
    }
    public function createNota()
    {
        $data = array(
            'id_seller' => $this->session->userdata('id_seller'),
            'tgl'=>date('Y-m-d')
        );
        return $this->db->insert('nota',$data);
    }
    public function getLastNota()
    {
        $dataNota = $this->db
        ->where('id_seller',$this->session->userdata('id_seller'))
        ->order_by('id_nota','desc')
        ->limit('1')
        ->get('nota')->row();

        return $dataNota;
    }
    public function update_bukti()
    {
        $data = array(
            'bukti' => $this->upload->data('file_name')
        );
        return $this->db->where('id_nota',$this->input->post('id_nota'))->update('nota',$data);
    }
    public function update_total($id_nota)
    {
       $data = array(
            'grandtotal' => $this->cart->total()
        );
        return $this->db->where('id_nota',$id_nota)->update('nota',$data);
    }
}
}

/* End of file Get_barang_model.php */
/* Location: ./application/models/Get_barang_model.php */