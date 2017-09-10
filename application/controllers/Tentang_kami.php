<?php 
defined("BASEPATH") OR exit ("No direct script access allowed");

/**
* 
*/
class Tentang_kami extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->model(array("Common_md"));
	}

	public function index(){
		/* common as navbar, footer, etc */
		$data["navKategori"] = $this->Common_md->getListKategori();
		$data['halfCarousel'] = glob('assets/template2/images/half-carousel/*.jpg');
		$data["latestProduct"] = $this->Common_md->latestProduct();

		$this->load->view("template2/v_tentang-kami", $data);
	}
}
 ?>