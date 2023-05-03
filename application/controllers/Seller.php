<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller extends CI_Controller {


	public function index()
	{
        $data['konten']="v_seller";
        $this->load->model('seller_model');
        $data{'data_seller'}=$this->seller_model->getseller();

		$this->load->view('template',$data, false);
	}
	public function addSeller()
    {
        $this->form_validation->set_rules('nama', 'NAMA', 'trim|required' , array('required' => 'SEMUA HARUS DIISI !!'));
        $this->form_validation->set_rules('alamat', 'ALAMAT', 'trim|required' , array('required' => 'SEMUA HARUS DIISI !!'));
        $this->form_validation->set_rules('telp', 'NO. HP', 'trim|required' , array('required' => 'SEMUA HARUS DIISI !!'));
        $this->form_validation->set_rules('email', 'Email', 'trim|required' , array('required' => 'SEMUA HARUS DIISI !!'));
          
        if ($this->form_validation->run() == TRUE) {
            
            $this->load->model('seller_model','seller');
            $masuk = $this->seller->addSeller();
            if ($masuk == TRUE) {

                  $this->session->set_flashdata('pesan', 'sukses masuk');
            }else
            {
                $this->session->set_flashdata('pesan', 'gagal masuk');
                
            }
            
            redirect(base_url('index.php/seller'),'refresh');
            

        } else {
            $this->session->set_flashdata('pesan',
             validation_errors());
             
             redirect(base_url('index.php/seller'),'refresh');
        }
        
    }   
    public function get_detail_seller($id_seller)
    {
        $this->load->model('seller_model');
        $data_detail=$this->seller_model->detailseller($id_seller);
        echo json_encode($data_detail);
    }
    public function updateSeller()
    {
        $this->form_validation->set_rules('nama', 'NAMA', 'trim|required' , array('required' => 'SEMUA HARUS DIISI !!'));
        $this->form_validation->set_rules('alamat', 'ALAMAT', 'trim|required' , array('required' => 'SEMUA HARUS DIISI !!'));
        $this->form_validation->set_rules('telp', 'NO. HP', 'trim|required' , array('required' => 'SEMUA HARUS DIISI !!'));
        $this->form_validation->set_rules('email', 'Email', 'trim|required' , array('required' => 'SEMUA HARUS DIISI !!'));

        if ($this->form_validation->run()== FALSE) {
            $this->session->set_flashdata('pesan', validation_errors());
            redirect(base_url('index.php/seller'),'refresh');
        }
        else{
            $this->load->model('seller_model');
            $proses_update=$this->seller_model->updateSeller();
            if ($proses_update) {
                $this->session->set_flashdata('pesan', 'sukses update');
            }
            else{
                $this->session->set_flashdata('pesan', 'gagal update');
            }
            redirect('base_url'('index.php/seller'),'refresh');
        }
    }
    public function deleteSeller($id_seller)
    {
        $this->load->model('seller_model');
        $prosesHapus = $this->seller_model->deleteSeller($id_seller);
        if ($prosesHapus == TRUE) {
            $this->session->set_flashdata('pesan', 'sukses lur');
        }
        else{
            $this->session->set_flashdata('pesan', 'gagal lur');
        }
        redirect(base_url('index.php/seller'),'refresh');
    }


    


}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */