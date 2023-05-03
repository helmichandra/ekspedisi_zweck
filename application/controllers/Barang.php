<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {


  public function index()
  {
        $data['konten']="v_barang";
        $this->load->model('barang_model');
        $data{'data_barang'}=$this->barang_model->getbarang();

        $this->load->view('template',$data, false);
  }
  public function history()
  {
        $data['konten']="v_history";
        $this->load->model('barang_model');
        $data{'data_barang'}=$this->barang_model->gethistory();

        $this->load->view('template',$data, false);
  }
  public function addBarang()
    {
        $this->form_validation->set_rules('nama', 'NAMA', 'trim|required' , array('required' => 'SEMUA HARUS DIISI !!'));
        $this->form_validation->set_rules('berat', 'BERAT(KG)', 'trim|required' , array('required' => 'SEMUA HARUS DIISI !!'));
        $this->form_validation->set_rules('alamat', 'ALAMAT', 'trim|required' , array('required' => 'SEMUA HARUS DIISI !!'));
        $this->form_validation->set_rules('kode_pos', 'KODE POS', 'trim|required' , array('required' => 'SEMUA HARUS DIISI !!'));
        $this->form_validation->set_rules('tujuan', 'TUJUAN', 'trim|required' , array('required' => 'SEMUA HARUS DIISI !!'));
          
        if ($this->form_validation->run() == TRUE) {
            
            $this->load->model('barang_model','barang');
            $masuk = $this->barang->addBarang();
            if ($masuk == TRUE) {

                  $this->session->set_flashdata('pesan', 'sukses masuk');
            }else
            {
                $this->session->set_flashdata('pesan', 'gagal masuk');
                
            }
            
            redirect(base_url('index.php/barang'),'refresh');
            

        } else {
            $this->session->set_flashdata('pesan',
             validation_errors());
             
             redirect(base_url('index.php/barang'),'refresh');
        }
        
    }   
    public function get_detail_barang($id_barang)
    {
        $this->load->model('barang_model');
        $data_detail=$this->barang_model->detailbarang($id_barang);
        echo json_encode($data_detail);
    }
    public function updateBarang()
    {
        $this->form_validation->set_rules('nama', 'NAMA', 'trim|required' , array('required' => 'SEMUA HARUS DIISI !!'));
        $this->form_validation->set_rules('berat', 'BERAT(KG)', 'trim|required' , array('required' => 'SEMUA HARUS DIISI !!'));
        $this->form_validation->set_rules('alamat', 'ALAMAT', 'trim|required' , array('required' => 'SEMUA HARUS DIISI !!'));
        $this->form_validation->set_rules('kode_pos', 'KODE POS', 'trim|required' , array('required' => 'SEMUA HARUS DIISI !!'));
        $this->form_validation->set_rules('lokasi_barang', 'LOKASI BARANG', 'trim|required' , array('required' => 'SEMUA HARUS DIISI !!'));

        if ($this->form_validation->run()== FALSE) {
            $this->session->set_flashdata('pesan', validation_errors());
            redirect(base_url('index.php/barang'),'refresh');
        }
        else{
            $this->load->model('barang_model');
            $proses_update=$this->barang_model->updateBarang();
            if ($proses_update) {
                $this->session->set_flashdata('pesan', 'sukses update');
            }
            else{
                $this->session->set_flashdata('pesan', 'gagal update');
            }
            redirect('base_url'('index.php/barang'),'refresh');
        }
    }
    public function deleteBarang($id_barang)
    {
        $this->load->model('barang_model');
        $prosesHapus = $this->barang_model->deleteBarang($id_barang);
        if ($prosesHapus == TRUE) {
            $this->session->set_flashdata('pesan', 'sukses lur');
        }
        else{
            $this->session->set_flashdata('pesan', 'gagal lur');
        }
        redirect(base_url('index.php/barang'),'refresh');
    }


    

        public function transaksi()
{
        $this->form_validation->set_rules('id_barang', 'BARANG', 'trim|required' , array('required' => 'SEMUA HARUS DIISI !!'));
        // $this->form_validation->set_rules('id_seller', 'SELLER', '' , array('required' => 'SEMUA HARUS DIISI !!'));
        $this->form_validation->set_rules('berat', 'BERAT', 'trim|required' , array('required' => 'SEMUA HARUS DIISI !!'));
          
        if ($this->form_validation->run() == TRUE) {
            
            $this->load->model('barang_model','barang');
            $masuk = $this->barang->transaksy();

            if ($masuk == TRUE) {

                  $this->session->set_flashdata('pesan', 'sukses masuk');
                  redirect(base_url('index.php/success'),'refresh');        
            }else
            {
                $this->session->set_flashdata('pesan', 'gagal masuk');
                
            }
            
            redirect(base_url('index.php/barang'),'refresh');
            

        } else {
            $this->session->set_flashdata('pesan',
             validation_errors());
             
             redirect(base_url('index.php/barang'),'refresh');
        }
        
    }   
    public function Cetak($id_barang)
    {
        $this->load->model('barang_model');
        $data['data_barang'] = $this->barang_model->Cetak($id_barang);
        $this->load->view('nota', $data);
    }

}

