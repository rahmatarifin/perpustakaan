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

		if($this->session->userdata('username') == ""){
			redirect(base_url('login'));
		}
	}

	function index(){
		//$this->load->view('web_dinamis');
		$data['username'] = $this->session->userdata('username');
		
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan_petugas');
		$this->load->view('templates/r_header', $data);
		$this->load->view('templates/r_panel');
		$this->load->view('templates/v_footer');
		
	}

	function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}

}