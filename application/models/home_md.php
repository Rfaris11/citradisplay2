<?php
defined("BASEPATH") OR exit("No direct script access allowed");

/**
* 
*/
class Home_md extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getListKategori(){
		$this->db->order_by("NID","ASC");
		return $this->db->get("mst_kategori")->result_array();
	}

	function getListTopProduk(){
		$this->db->limit(8,0);
		return $this->db->get("v_detail_produk")->result_array();
	}

	function getDetailImgProduk($param){
		$this->db->where_in("NID_PRODUK", $param);
		return $this->db->get("dtl_mst_produk")->result_array();
	}
}
?>