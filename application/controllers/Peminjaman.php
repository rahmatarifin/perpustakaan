<?php
class Peminjaman extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_peminjaman');
	}

	function index(){
		$data['data'] = $this->m_pinjam->tampildata();
		$this->load->view('pinjam/v_peminjaman', $data);
	}

	function pinjam(){
		
	}
}