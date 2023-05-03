<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

  public function getbarang()
    {
        $data_barang= $this->db->where('status_pengiriman !=', 'sudah diterima')->get('barang')->result();
    return $data_barang; 
    }
    public function gethistory()
    {
        $data_barang= $this->db->where('status_pengiriman', 'sudah diterima')->get('barang')->result();
    return $data_barang; 
    }
    public function addBarang()
    {
        $data_barang = array(
            'nama' => $this->input->post('nama'),
            'nama_pembeli' => $this->input->post('nama_pembeli'),
            'berat' => $this->input->post('berat'),
            'alamat' => $this->input->post('alamat'),
            'kode_pos' => $this->input->post('kode_pos'),
            'tujuan' => $this->input->post('tujuan'),
            'biaya' => $this->db->where('kota', $this->input->post('tujuan'))->get('tujuan')->row()->tarif * $this->input->post('berat'),
            'status_pengiriman' => 'sedang diproses'
        );
        $sql_masuk = $this->db->insert('barang', $data_barang);
        return $sql_masuk;
    }

     public function transaksy()
    {
        $data_barang = array(
            // 'id_seller' => $this->input->post('id_seller'),
            'id_barang' => $this->input->post('id_barang'),
            'berat' => $this->input->post('berat'),
            'harga' => $this->input->post('berat') * 10000
        );
        $sql_masuk = $this->db->insert('transaksi', $data_barang);
        return $sql_masuk;
    }

    public function detailBarang($id_barang)
    {
        $detail = $this->db->where('id_barang',$id_barang)->get('barang')->row();
        return $detail;
    }
    public function updateBarang()
    {
        $data_barang = array(
            'nama' => $this->input->post('nama'),
            'nama_pembeli' => $this->input->post('nama_pembeli'),
            'berat' => $this->input->post('berat'),
            'alamat' => $this->input->post('alamat'),
            'kode_pos' => $this->input->post('kode_pos'),
            'lokasi_barang' => $this->input->post('lokasi_barang'),
            'status_pengiriman' => $this->input->post('status_pengiriman')
        );

        $where = $this->db->where('id_barang',$this->input->post('id_barang'))
        ->update('barang', $data_barang);
        return $where;
    }
    public function deleteBarang($id_barang)
    {
        $delete = $this->db->where('id_barang', $id_barang)->delete('barang');
        return $delete;
        
    }
    public function Cetak($id_barang)
    {
        $data = $this->db->where('barang.id_barang', $id_barang)->get('barang')->result();
    return $data;
    }

}
