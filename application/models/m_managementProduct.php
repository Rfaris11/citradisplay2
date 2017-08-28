<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_managementProduct extends CI_Model {

	public function getMasterProduct($tableName){
		$res = $this->db->get($tableName);
		return $res->result_array();
	}

	public function getSelectedMasterProduct($tableName,$where){
		$res = $this->db->get_where($tableName,$where);
		return $res->result_array();
	}

	public function deleteData($tableName,$where){
		$res = $this->db->delete($tableName,$where);
		return $res;
	}

	public function getAllMasterKategori($tableName){
		$res = $this->db->get($tableName);
		return $res->result_array();
	}

	public function insertMaster($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
	}

	public function getSequence($where,$tableName){
		$res = $this->db->select_max($where)->get($tableName);
		return $res->result_array();
	}

	public function deleteMstAndDtl($where){
		$res = $this->db->query('delete a.*,b.* from mst_produk a inner join dtl_mst_produk b on a.NID=b.NID_PRODUK where a.NID = '.$where);
		return $res;
	}
}
