<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_user extends CI_Controller {


  public function index()
  {
        $data['konten_user']="v_barang_user";
        $this->load->model('Ubarang_model');
        $data{'data_barang'}=$this->Ubarang_model->getbarang();

    $this->load->view('template_user',$data, false);
  }
  
    public function get_detail_barang($id_barang)
    {
        $this->load->model('Ubarang_model');
        $data_detail=$this->Ubarang_model->detailbarang($id_barang);
        echo json_encode($data_detail);
    }

    public function search()
    {
        $this->load->model('Ubarang_model');
        $data['konten_user']="v_barang_user";
        $data{'data_barang'}= $data_detail=$this->Ubarang_model->search();
    $this->load->view('template_user',$data, false);

    }

}

