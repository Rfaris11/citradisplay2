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
		$res = $this->M_managementProduct->getSelectedMasterProduct('mst_produk',$where);
		echo json_encode(array("list" => $res));

	}

	public function doDeleteMasterProduct($nid){
		$where = array('NID' => $nid);
		$res = $this->M_managementProduct->deleteSelectedMasterProduk('mst_produk',$where);
		$this->session->set_flashdata('msgAction','Data berhasil dihapus');
		redirect('admin/daftarProduk');

	}

	public function doUploadFile(){
		$addKategori = $this->input->post('addKategori');
		$addNama = $this->input->post('addNama');
		$addDeskripsi = $this->input->post('addDeskripsi');
		$addSpesifikasi = $this->input->post('addSpesifikasi');

		 // setting konfigurasi upload
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        // load library upload
        $this->load->library('upload', $config);
        $this->upload->do_upload('fileProduk');
        $result1 = $this->upload->data();
        $result = array('fileProduk'=>$result1);
        $fileProduk = $result['fileProduk']['full_path'];
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
        		$pathProduk = $cek['NID'];
        	}
        	
        	$dataDetail = array(
        		'NID_PRODUK' => $pathProduk,
        		'VURL' => $fileProduk
        		);

        	$res = $this->M_managementProduct->	insertMaster('dtl_mst_produk',$dataDetail);
        	if($res>0){
        		echo "berhasil";
        	}
        }
	}

}
?>