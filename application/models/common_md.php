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
		$this->db->limit(3);
		return $this->db->get("V_DETAIL_PRODUK")->result_array();
	}
}
?>