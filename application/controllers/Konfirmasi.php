<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi extends CI_Controller {




  public function index()
  {
     $this->load->helper('form');
     $data['konten']="V_konfirmasi";   
     $this->load->view('template', $data, FALSE);
     
  }


	public function send(){

    $subject = 'Transaksi dikonfirmasi - ' . $this->input->post("name"); //subjek di pesan email

  

    $file_data = $this->upload_file();

    if(is_array($file_data)){

     $message = '

     <h3 align="center">Form Transaksi</h3>

      <table border="1" width="100%" cellpadding="5">

       <tr>

        <td width="30%">Name</td>

        <td width="70%">'.$this->input->post("name").'</td>

       </tr>

 

       <tr>

        <td width="30%">Pembayaran</td>

        <td width="70%">'.$this->input->post("pembayaran").'</td>

       </tr>

      <tr>

        <td width="30%">Email</td>

        <td width="70%">'.$this->input->post("email").'</td>

       </tr>  

       <tr>

        <td width="30%">No. HP Pembeli</td>

        <td width="70%">'.$this->input->post("mobile").'</td>

       </tr>

       <tr>

        <td width="30%">Keterangan</td>

        <td width="70%">'.$this->input->post("additional_information").'</td>

       </tr>

      </table>

     ';

 

      $config = array(

           'protocol'  => 'smtp',

           'smtp_host' => 'ssl://smtp.googlemail.com', //host gmail

           'smtp_port' => 465, //port gmail

           'smtp_user' => 'helmychandra17@gmail.com', //masukan alamat gmail kamu

           'smtp_pass' => 'helmy17Chandra', //masukkan password gmail kamu

           'mailtype'  => 'html', //tipe email

           'charset'  => 'iso-8859-1',

           'wordwrap'  => TRUE

      );

      $this->load->library('email', $config);

      $this->email->set_newline("\r\n");

      $this->email->from('helmychandra17@gmail.com'); //masukkan alamat email pengirim

      $this->email->to($this->input->post("email")); //masukkan alamat gmail kamu / email yang dituju

      $this->email->subject($subject);

         $this->email->message($message);

         $this->email->attach($file_data['full_path']);

         if($this->email->send()){

          if(delete_files($file_data['file_path'])){

           $this->session->set_flashdata('message', 'Lamaran Terkirim');

           redirect('Konfirmasi');

          }

         }else{

          if(delete_files($file_data['file_path'])){

           $this->session->set_flashdata('message', 'Pengiriman Lamaran Error');

           redirect('Konfirmasi');

          }

         }  

     }else{

      $this->session->set_flashdata('message', 'Attach File Error ');

         redirect('Konfirmasi');

     }

  }

  function upload_file(){

    $config['upload_path'] = 'upload/';

    $config['allowed_types'] = 'doc|docx|pdf'; //tipe file attach

    $this->load->library('upload', $config);

    if($this->upload->do_upload('resume')){

     return $this->upload->data();  

    }else{

     return $this->upload->display_errors();

    }

  }


    

}

/* End of file Kirim.php */
/* Location: ./application/controllers/Kirim.php */