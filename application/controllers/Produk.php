<?php
defined("BASEPATH") OR exit("No direct script access allowed");

/**
* 
*/
class Produk extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model("Produk_md");
	}

	public function index(){
		$data["kategori"] = $this->Produk_md->getListKategori();
		$data["kategori_aktif"] = null;
		if (isset($_GET["user"])) {
			$data["kategori_aktif"] = $_GET["user"];
			$data["list_produk"] = $this->Produk_md->getAllProduct(1);
		}
		$this->load->view("produk_vw", $data);
	}

	public function all(){
		echo "lorem";
	}

	public function getAllProductPerKategori(){
		$perpage = 20;
		$param1 = ($this->input->post("idkategori") != "all") ? $this->input->post("idkategori") : null;
		echo json_encode(array(
			"list" => $this->Produk_md->getAllProductPerKategori($param1, $this->input->post("page"), $perpage), 
			"numpage" => $this->Produk_md->countPage($param1, $perpage)
			));
	}
}
?>