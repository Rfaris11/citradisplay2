<?php
defined("BASEPATH") OR exit ("No direct script access allowed");

/**
* 
*/
class Produk_md extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getListKategori(){
		$this->db->order_by("NID","ASC");
		return $this->db->get("MST_KATEGORI")->result_array();
	}

	function getAllProduct($param1){
		$this->db->limit(20,0);
		if (!empty($param1)) {
			$this->db->where("NID_KATEGORI", $param1);
		}
		return $this->db->get("MST_PRODUK")->result_array();
	}

	function queryGetDataAllPerKategori($param1 = null){
		$query = $this->db;
		if ($param1 != null) {
			$query = $this->db->where("NID_KATEGORI", $param1);
		}

		return $query;
	}

	function getAllProductPerKategori($param1, $now, $perpage){
		$offset = ($now - 1) * $perpage;
		// $query = $this->db;
		// if ($param1 != null) {
		// 	$query = $this->db->where("NID_KATEGORI", $param1);
		// }
		// $this->db->limit($perpage, $offset);
		// $query = $this->db->get("V_DETAIL_PRODUK");
		return array("count" => $this->queryGetDataAllPerKategori($param1)->get("V_DETAIL_PRODUK")->num_rows(),
			"list" => $this->queryGetDataAllPerKategori($param1)->get("V_DETAIL_PRODUK", $perpage, $offset)->result_array());
	}

	function querySearchProduct($param1){
		$this->db->like("VNAMA", $param1);
	}

	function searchProduct($param1, $now, $perpage){
		$offset = ($now - 1) * $perpage;
		// $this->db->limit($perpage, $page);
		return array("count" => $this->db->like("VNAMA", $param1)->get("V_DETAIL_PRODUK")->num_rows(),
			"list" => $this->db->limit($perpage, $offset)->like("VNAMA", $param1)->get("V_DETAIL_PRODUK")->result_array());
	}

	function countPage($param1, $perpage){
		if ($param1 != null) {
			$this->db->where("NID_KATEGORI", $param1);
		}
		$num_rows = $this->db->get("MST_PRODUK")->num_rows();
		return ceil($num_rows/$perpage);
	}

	function countPageSearch($param1, $perpage){
		if ($param1 != null) {
			$this->db->like("VNAMA", $param1);
		}
		$num_rows = $this->db->get("V_DETAIL_PRODUK")->num_rows();
		return ceil($num_rows/$perpage);
	}

	function getData($id){
		$this->db->where("NID",$id);
		return $this->db->get("V_DETAIL_PRODUK")->row_array();
	}
}
?>