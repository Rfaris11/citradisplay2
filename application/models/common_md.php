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
		return $this->db->get("V_DETAIL_PRODUK")->result_array();
	}

	function getListKategori(){
		$this->db->order_by("NID","ASC");
		return $this->db->get("MST_KATEGORI")->result_array();
	}
}
?>