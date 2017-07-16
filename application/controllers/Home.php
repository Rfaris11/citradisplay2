<?php
defined('BASEPATH')OR exit("No direct script access allowed");

/**
* 
*/
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model("Home_md");
	}

	public function index(){
		$data['kategori'] = $this->Home_md->getListKategori();
		$data['topproduk'] = $this->Home_md->getListTopProduk();
		$this->load->view("home_vw3", $data);
	}
}
?>