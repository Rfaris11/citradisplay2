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
		$this->load->model(array("Produk_md","Common_md"));
	}

	public function index($cari = null){
		$data["cari"] = ($cari != null) ? $cari : null;
		$data["kategori"] = $this->Produk_md->getListKategori();
		$data["kategori_aktif"] = null;
		$data["latest_product"] = $this->Common_md->latestProduct();
		if (isset($_GET["user"])) {
			$data["kategori_aktif"] = $_GET["user"];
			$data["list_produk"] = $this->Produk_md->getAllProduct(1);
		}
		/* common as navbar, footer, etc */
		$data['halfCarousel'] = glob('assets/template2/images/half-carousel/*.jpg');
		$data["latestProduct"] = $this->Common_md->latestProduct();
		$data["navKategori"] = $this->Common_md->getListKategori();

		$this->load->view("template2/v_produk", $data);
	}

	public function all(){
		echo "lorem";
	}

	public function getAllProductPerKategori(){
		$perpage = 20;
		$param1 = (is_numeric($this->input->post("idkategori"))) ? $this->input->post("idkategori") : "-";
		$page = ($this->input->post("page") == null) ? 1 : $this->input->post("page");
		$data = $this->Produk_md->getAllProductPerKategori(($param1 == 0) ? null : $param1, $page, $perpage);
		$collectID = array();
		foreach ($data['list'] as $key) {
			array_push($collectID, $key["NID"]);
		}
		$data["img"] = $this->Produk_md->getDetailImgProduk($collectID);
		echo json_encode(array(
			"list" => $data["list"], 
			"img" => $data["img"],
			"count" => $data["count"],
			"numpage" => $this->Produk_md->countPage(($param1 == 0) ? null : $param1, $perpage)
			));
	}

	public function searchProduct(){
		// echo $this->input->get("cari", TRUE);
		// $data = $this->uri->uri_to_assoc();
		// $code = $data['cari'];
		// echo $code;
		$perpage = 20;
		$page = ($this->input->post("page") == null) ? 1 : $this->input->post("page");
		$data = $this->Produk_md->searchProduct($this->input->post("keyword"), $page, $perpage);
		$collectID = array();
		foreach ($data["list"] as $key) {
			array_push($collectID, $key["NID"]);
		}
		$data["img"] = (count($collectID) > 0) ? $this->Produk_md->getDetailImgProduk($collectID) : array();
		echo json_encode(array(
			"list" => $data["list"],
			"img" => $data["img"],
			"count" => $data["count"],
			"numpage" => $this->Produk_md->countPageSearch($this->input->post("keyword"), $perpage)));
	}

	public function detail_old($id){
		$data["header"] = $this->Produk_md->getData($id);
		$data["img"] = $this->Produk_md->getDetailImgProduk($data["header"]["NID"]);
		$data["latest_product"] = $this->Common_md->latestProduct();
		$this->load->view('detail_produk_vw', $data);
	}

	public function detail($id){
		$data["header"] = $this->Produk_md->getData($id);
		$data["img"] = $this->Produk_md->getDetailImgProduk($data["header"]["NID"]);
		$data["latest_product"] = $this->Common_md->latestProduct();

		/* common as navbar, footer, etc */
		$data['halfCarousel'] = glob('assets/template2/images/half-carousel/*.jpg');
		$data["latestProduct"] = $this->Common_md->latestProduct();
		$data["navKategori"] = $this->Common_md->getListKategori();
		$this->load->view('template2/v_detail-produk', $data);
	}
}
?>