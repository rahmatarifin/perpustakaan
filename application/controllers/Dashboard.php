<?php
/**
* 
*/
defined('BASEPATH')	OR exit ('no direct script access allowed');
class Dashboard extends ci_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_anggota');
		$this->load->model('m_buku');
		$this->load->model('m_petugas');

		if($this->session->userdata('status') !="login"){
			redirect(base_url('login'));
		}
	}

	function index(){
		$this->load->view('template');
	}

}