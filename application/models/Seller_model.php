<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_model extends CI_Model {

	public function getseller()
    {
        $data_seller= $this->db->get('seller')->result();
  		return $data_seller;
        
    }
    public function addSeller()
    {
        $data_seller = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telp'),
            'email' => $this->input->post('email')
            

            
        );
        $sql_masuk = $this->db->insert('seller', $data_seller);
        return $sql_masuk;
    }
    public function detailseller($id_seller)
    {
        $detail = $this->db->where('id_seller',$id_seller)->get('seller')->row();
        return $detail;
    }
    public function updateSeller()
    {
        $data_seller = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telp'),
            'email' => $this->input->post('email')

            
        );

        $where = $this->db->where('id_seller',$this->input->post('id_seller'))
        ->update('seller', $data_seller);
        return $where;
    }
    public function deleteSeller($id_seller)
    {
        $delete = $this->db->where('id_seller', $id_seller)->delete('seller');
        return $delete;
        
    }

}
