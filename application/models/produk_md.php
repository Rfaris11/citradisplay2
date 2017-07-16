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

	function getAllProductPerKategori($param1, $page, $perpage){
		$this->db->limit($perpage, $page);
		if ($param1 != null) {
			$this->db->where("NID_KATEGORI", $param1);
		}
		return $this->db->get("MST_PRODUK")->result_array();
	}

	function countPage($param1, $perpage){
		if ($param1 != null) {
			$this->db->where("NID_KATEGORI", $param1);
		}
		$num_rows = $this->db->get("MST_PRODUK")->num_rows();
		return ceil($num_rows/$perpage);
	}
}
?>