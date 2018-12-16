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
		$this->load->model('m_login');

		if($this->session->userdata('status') !="login"){
			redirect(base_url('login'));
		}
	}

	function index(){
		//$this->load->view('web_dinamis');
		
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header');
		$this->load->view('templates/r_panel');
		$this->load->view('templates/v_footer');
		
	}

}