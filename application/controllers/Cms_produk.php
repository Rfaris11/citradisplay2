<?php
defined('BASEPATH')OR exit("No direct script access allowed");

/**
* 
*/
class Cms_produk extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		/* */
		$this->load->database();
		$this->load->model('M_managementProduct');
		
	}

	public function showListProduct(){
		$param = $this->input->post("id");
		$where = array(
			'NID' => $param
			);
		$res = $this->M_managementProduct->getSelectedMasterProduct('mst_produk',$where);
		echo json_encode(array("list" => $res));

	}
}
?>