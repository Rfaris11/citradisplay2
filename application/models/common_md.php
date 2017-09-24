<?php
defined('BASEPATH') OR exit ("No direct script access allowed");

/**
* 
*/
class Common_md extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function latestProduct(){
		$this->db->limit(5,0);
		return $this->db->get("v_detail_produk")->result_array();
	}

	function getListKategori(){
		$this->db->order_by("NID","ASC");
		return $this->db->get("mst_kategori")->result_array();
	}
}
?>