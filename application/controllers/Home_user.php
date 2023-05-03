<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_user extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login')!= TRUE){
            
            redirect(base_url('index.php/login_user'),'refresh');
            
        }
	}

	public function index()
	{
		$data['konten_user']="home_user";
		$this->load->view('template_user', $data);		
	}

}

/* End of file Home_user.php */
/* Location: ./application/controllers/Home_user.php */