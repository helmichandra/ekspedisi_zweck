<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model_user extends CI_Model {

	public function get_login()
	{
		return $this->db
		->where('username', $this->input->post('username'))
		->where('password', $this->input->post('password'))
		->get('users2');

	}
    public function get_login_admin()
    {
        return $this->db
        ->where('username', $this->input->post('username'))
        ->where('password', $this->input->post('password'))
        ->get('admin');

    }
	public function addUser()
    {
        $object = array(
        	'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
             
   
        );
        $sqlTambah = $this->db->insert('users2', $object);
        return $sqlTambah;
    }

}
