<?php
defined('BASEPATH')OR exit("No direct script access allowed");

/**
* 
*/
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status')!="isLogin"){
			redirect('login');
		}
		$this->load->database();
		$this->load->model('M_managementProduct');
	}

	public function index(){
		$this->load->view('v_dashboardBeta');
	}

	public function dashboard(){
		$this->load->view('v_dashboardBeta');
	}

	public function daftarProduk(){
		$data = $this->M_managementProduct->getMasterProduct('mst_produk');
		$dataKategori = $this->M_managementProduct->getAllMasterKategori('mst_kategori');
		$this->load->view('v_daftarProduk',array('data' => $data,
			'dataKategori' => $dataKategori
			));
	}
}
?>