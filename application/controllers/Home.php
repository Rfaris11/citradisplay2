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
		$data['carousel'] = glob('assets/template2/images/carousel/*.jpg');
		$data['kategori'] = $this->Home_md->getListKategori();
		$data['topproduk'] = $this->Home_md->getListTopProduk();
		$CollectID = array();
		foreach ($data['topproduk'] as $key) {
			array_push($CollectID, $key['NID']);
		}
		$data["img"] = $this->Home_md->getDetailImgProduk($CollectID);

		/* common as navbar, footer, etc */
		$data['halfCarousel'] = glob('assets/template2/images/half-carousel/*.jpg');
		$data["latestProduct"] = $this->Common_md->latestProduct();
		$data["navKategori"] = $this->Common_md->getListKategori();

		$this->load->view("template2/v_home", $data);
	}
}
?>