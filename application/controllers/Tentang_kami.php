<?php
defined("BASEPATH") OR exit ("No direct script access allowed");

/**
* 
*/
class Tentang_kami extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index(){
		$this->load->view("Tentang_kami_vw");
	}
}
?>