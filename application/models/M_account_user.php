  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_account_user extends CI_Model{

       function daftar($data)
       {
            $this->db->insert('users2',$data);
       }
  }