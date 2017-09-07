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
		//$this->load->helper(array('form', 'url'));
		
	}

	public function showListProduct(){
		if($this->session->userdata('status')!= "isLogin"){
			redirect('login');
		}
		
		$param = $this->input->post("id");
		$where = array(
			'NID' => $param
			);
		$res = $this->M_managementProduct->getSelectedMaster('mst_produk',$where);
		echo json_encode(array("list" => $res));

	}

	public function showListKategori(){
		$param = $this->input->post("id");
		$where = array(
			'NID' => $param
			);
		$res = $this->M_managementProduct->getSelectedMaster('mst_kategori',$where);
		echo json_encode(array("list" => $res));
	}

	public function showSelectedKategori(){
		if($this->session->userdata('status')!= "isLogin"){
			redirect('login');
		}

		$param = $this->input->post("id");
		$where = array(
			'ID' => $param
			);
		$res = $this->M_managementProduct->getSelectedMaster('v_get_selected_master_prod',$where);
		echo json_encode(array("res" => $res));
	}

	public function doDeleteMasterProduct($nid){
		$res = $this->M_managementProduct->deleteMstAndDtl($nid);
		$this->session->set_flashdata('msgAction','Data berhasil dihapus');
		redirect('admin/daftarProduk');
	}

	public function doUploadFile(){
		$addKategori = $this->input->post('addKategori');
		$addNama = $this->input->post('addNama');
		$addDeskripsi = $this->input->post('addDeskripsi');
		$addSpesifikasi = $this->input->post('addSpesifikasi');
		//$namaAddFileProduk = $this->input->post('namaAddFileProduk');

		 // setting konfigurasi upload
        $config['upload_path'] = base_url('assets/uploads/');
        $config['allowed_types'] = 'gif|jpg|png';
        // load library upload
        $this->load->library('upload', $config);
        $this->upload->do_upload('namaAddFileProduk');
        $result1 = $this->upload->data();
        $result = array('namaAddFileProduk'=>$result1);
        $fileProduk = $result['namaAddFileProduk']['full_path'];
        $data = array(
        	'NID_KATEGORI' => $addKategori,
        	'VURL1' => "0",
        	'VURL2' => "0",
        	'VURL3' => "0",
        	'VNAMA' => $addNama,
        	'VDESKRIPSI' => $addDeskripsi,
        	'VSPESIFIKASI' => $addSpesifikasi,
        	'NID_MERK' => "0"
        	);
        $res = $this->M_managementProduct->insertMaster('mst_produk',$data);
        if($res>0){
        	$resSelected = $this->M_managementProduct->getSequence('NID','mst_produk');
        	foreach ($resSelected as $cek) {
        		$idProduk = $cek['NID'];
        	}
        	
        	$dataDetail = array(
        		'NID_PRODUK' => $idProduk,
        		'VURL' => $fileProduk
        		);

        	$res = $this->M_managementProduct->insertMaster('dtl_mst_produk',$dataDetail);
        	if($res>0){
        		$this->session->set_flashdata('msgAction','Data berhasil ditambah');
        		redirect('admin/daftarProduk');
        	}
        }
	}

	public function doInsertMstKategori(){
		$addNama = $this->input->post('addNama');
		$addDeskripsi = $this->input->post('addDeskripsi');
		$data = array(
			'VNAMA' => $addNama,
			'VDESKRIPSI' => $addDeskripsi
			);
		$res = $this->M_managementProduct->insertMaster('mst_kategori',$data);
		if($res>0){
			$this->session->set_flashdata('msgAction','Data berhasil ditambah');
			redirect('admin/daftarKategori');
		}
	}

	public function doDeleteMstKategori($nid){
		$res = $this->M_managementProduct->deleteMstKategoriAndDtl($nid);
		$this->session->set_flashdata('msgAction','Data berhasil dihapus');
		redirect('admin/daftarKategori');
	}

}
?>