<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

	public function index()
	{
		$data['konten_user']="V_tentang";
		$this->load->view('template_user', $data);
	}

}

/* End of file Tentang.php */
/* Location: ./application/controllers/Tentang.php */