<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_barang extends CI_Controller {

	function __construct($foo = null)
	{
		parent::__construct();
		$this->load->model('get_barang_model','gt_brg');
	}

	public function index()
	{
		$dt_barang=$this->gt_brg->get_barang();
		echo json_encode($dt_barang);
	}
	public function cari($id_barang='')
	{
		$dt_barang=$this->gt_brg->cari_get_barang($id_barang);
		echo json_encode($dt_barang);
	}
		public function detail($id_barang)
		{
			$dt_barang=$this->gt_kmr->get_detail($id_kamar):
			echo json_encode($dt_kamar);
		}
}

/* End of file Get_barang.php */
/* Location: ./application/controllers/Get_barang.php */