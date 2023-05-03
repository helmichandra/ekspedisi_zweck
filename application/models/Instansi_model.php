<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instansi_model extends CI_Model {

	public function get_instansi()
  {
    $data_instansi= $this->db->get('instansi')->result();
    return $data_instansi; 
  }
  public function addInstansi()
  {
    $data_instansi=array(
      'nama_instansi'=>$this->input->post('nama_instansi'),

      'email'=>$this->input->post('email')
    );
    $sql_masuk=$this->db->insert('instansi', $data_instansi);
    return $sql_masuk;
  }
  public function detail_instansi($id_instansi)
  {
  return $this->db->where('id_instansi', $id_instansi)->get('instansi')->row();
  } 
  public function updateInstansi()
  {
    $db_up_instansi=array(
                    'nama_instansi'=>$this->input->post('nama_instansi'),
                    'email'=>$this->input->post('email')
                );
                return $this->db->where('id_instansi', $this->input->post('id_instansi'))->update('instansi',$db_up_instansi);
  }
  public function delete_instansi($id_instansi)
  {
    $delete = $this->db->where('id_instansi',$id_instansi)->delete('instansi');
    return $delete;
  }

}

/* End of file Instansi_model.php */
/* Location: ./application/models/Instansi_model.php */