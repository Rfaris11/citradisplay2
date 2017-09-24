<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_managementProduct extends CI_Model {

	public function getAllMaster($tableName){
		$res = $this->db->get($tableName);
		return $res->result_array();
	}

	public function getSelectedMaster($tableName,$where){
		$res = $this->db->get_where($tableName,$where);
		return $res->result_array();
	}

	public function deleteData($tableName,$where){
		$res = $this->db->delete($tableName,$where);
		return $res;
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
		$res = $this->db->query('delete a.*,b.* from dtl_mst_produk a right join mst_produk b on b.nid=a.nid_produk where b.nid='.$where);
		return $res;
	}

	public function deleteMstKategoriAndDtl($where){
		$res = $this->db->query('delete a.*,b.*,c.* from dtl_mst_produk a right join mst_produk b on b.nid = a.nid_produk right join mst_kategori c on c.nid = b.nid_kategori where c.nid='.$where);
		return $res;
	}

	public function updateMaster($tableName,$data,$where){
		$res = $this->db->update($tableName,$data,$where);
		return $res;
	}
}
