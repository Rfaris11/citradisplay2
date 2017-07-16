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
		return $this->db->get("MST_KATEGORI")->result_array();
	}

	function getListTopProduk(){
		$this->db->limit(8,0);
		return $this->db->get("MST_PRODUK")->result_array();
	}
}
?>