<?php
defined("BASEPATH") OR exit ("No direct script access allowed");

/**
* 
*/
class Tentang_kami extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model("Common_md");
	}

	function index(){
		$data["latest_product"] = $this->Common_md->latestProduct();
		$this->load->view("Tentang_kami_vw", $data);
	}
}
?>