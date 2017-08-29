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
		$this->load->model(array("Home_md","Common_md"));
	}

	public function index(){
		$data['kategori'] = $this->Home_md->getListKategori();
		$data['topproduk'] = $this->Home_md->getListTopProduk();
		$CollectID = array();
		foreach ($data['topproduk'] as $key) {
			array_push($CollectID, $key['NID']);
		}
		$data["img"] = $this->Home_md->getDetailImgProduk($CollectID);
		// print_r($data['img']);
		$data["latest_product"] = $this->Common_md->latestProduct();
		$this->load->view("home_vw3", $data);
	}
}
?>