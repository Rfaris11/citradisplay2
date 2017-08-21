<?php
defined('BASEPATH')OR exit("No direct script access allowed");

/**
* 
*/
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status')=="isLogin"){
			redirect('Admin');
		}
		$this->load->database();
		$this->load->model('M_login');
		
	}

	public function index(){
		$this->load->view('v_login');
	}

	public function autentikasi(){
		if($_POST['userName'] == null or $_POST['userPassword'] == null){
			redirect('Admin');
		}else{
			$userName = $_POST['userName'];
			$userPassword = $_POST['userPassword'];
			$where = array(
				'VUSERNAME' => $userName,
				'VPASSWORD' => $userPassword
				);
			$cek = $this->M_login->cekLogin('mst_users',$where);
			if(count($cek)>0){
				foreach ($cek as $result) {
					$userNameSession = $result['VUSERNAME'];
					echo "debug";
					echo $result['VUSERNAME'];
				}
				$data_session = array(
					'sessionUser' => $userNameSession,
					'status' => "isLogin"
					);
				$this->session->set_userdata($data_session);
				redirect('Admin');
			}else{
				$this->session->set_flashdata('pesanLogin','Access denied');
				redirect('login');
			}
		}
	}

	public function auten2(){
		if($_POST['userName'] == null or $_POST['userPassword'] == null){
			redirect('Admin');
		}else{
			$userName = $_POST['userName'];
			$userPassword = $_POST['userPassword'];
			$where = array(
				'VUSERNAME' => $userName,
				'VPASSWORD' => $userPassword
				);
			$cek = $this->M_login->cekLogin('mst_users',$where);
			if(count($cek)>0){
				foreach ($cek as $result) {
					$userNameSession = $result['VUSERNAME'];
					echo "debug";
					echo $result['VUSERNAME'];
				}
				
		}

	}

}
}
?>