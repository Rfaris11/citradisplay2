<?php
defined('BASEPATH') OR exit ("No direct script access allowed");

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
		$data['halfCarousel'] = glob('assets/template2/images/half-carousel/*.jpg');
		$data['carousel'] = glob('assets/template2/images/carousel/*.jpg');
		$data['kategori'] = $this->Home_md->getListKategori();
		$data['topproduk'] = $this->Home_md->getListTopProduk();
		$CollectID = array();
		foreach ($data['topproduk'] as $key) {
			array_push($CollectID, $key['NID']);
		}
		$data["img"] = $this->Home_md->getDetailImgProduk($CollectID);
		$data["latestProduct"] = $this->Common_md->latestProduct();

		$this->load->view("template2/v_home", $data);
	}
}
?>