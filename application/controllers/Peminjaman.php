<?php
class Peminjaman extends ci_controller{
	function __construct(){
		parent::__construct();
		//$this->load->model('m_peminjaman');
	}

	function index(){
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header');
		//$data['data'] = $this->m_pinjam->tampildata();
		$this->load->view('pinjam/peminjaman'/*, $data*/);
		$this->load->view('templates/v_footer');
	}

	function pinjam(){
		
	}

	function add_pinjam(){
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header');
		$this->load->view('pinjam/tambah');
		$this->load->view('templates/v_footer');
	}
}