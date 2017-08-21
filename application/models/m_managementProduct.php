<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_managementProduct extends CI_Model {

	public function getMasterProduct($tableName){
		$data = $this->db->get($tableName);
		return $data->result_array();
	}

	public function getSelectedMasterProduct($tableName,$where){
		$data = $this->db->get_where($tableName,$where);
		return $data->result_array();
	}
}
