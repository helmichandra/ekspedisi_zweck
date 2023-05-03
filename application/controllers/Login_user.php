<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Controller {


    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model_user','l_user');
        
        
    }

    public function index()
    {
        $this->load->view('account_user/v_login');
    }
    public function proses_login()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required',array('required'=>'Username harus diisi lur'));
        $this->form_validation->set_rules('password', 'Password', 'trim|required',array('required'=>'Password harus diisi lur'));
        if ($this->form_validation->run()==FALSE) {
            $this->session->set_flashdata('pesan', validation_errors());
            redirect(base_url('index.php/login_user'));
        }
        else{
            $this->load->model('login_model_user');
            $cek_login=$this->login_model_user->get_login();
            if($cek_login->num_rows()>0){
                $data_login=$cek_login->row();

                $array = array(
                    'id_user' => $data_login->id_user,
                    'login'=>true,
                    'username' => $data_login->username,
                    'password' => $data_login->password
                );
                
                $this->session->set_userdata( $array );
                redirect('Home_user');
            }
            else{
                $this->session->set_flashdata('pesan', 'username dan password ga cocok lur');
                redirect(base_url('index.php/login_user'));

            }
        }
    }
    public function simpan()
    {
        $cekdata = $this->l_user->addUser();
        if ($cekdata) {
          $data['status'] = 1;
          $data['keterangan'] = "Anda sukses menambah data";
          echo json_encode($data);
          
        }else {
          $data['status'] = 0;
          $data['keterangan'] = "Anda gagal menambah data";
          echo json_encode($data);
        }
        redirect(base_url('index.php/login_user'));
    }

}