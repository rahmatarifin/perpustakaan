<?php
class Pengembalian extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pengembalian');
		$this->load->model('m_peminjaman');
	}

	function index(){
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header');
		$data['data'] = $this->m_peminjaman->tampildata();
		$this->load->view('pinjam/peminjaman', $data);
		$this->load->view('templates/v_footer');
	}

	function add_pengembalian(){
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header');
		$this->load->view('kembali/pengembalian');
		$this->load->view('templates/v_footer');
	}
}