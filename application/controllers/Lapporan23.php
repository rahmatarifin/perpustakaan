<?php
class Lapporan23 extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_anggota');
		$this->load->model('m_buku_');
		$this->load->model('m_peminjaman');
		//$this->load->library('')
		$this->load->library('pdf');
		

		if($this->session->userdata('username') == ""){
			redirect(base_url('login'));
		}
	}

	function index(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$this->load->view('laporan/filter');
		$this->load->view('templates/v_footer');
	}

	function la_transaksi(){
		$tgl_awal = $this->input->post('tgl_awal');
		$tgl_akhir = $this->input->post('tgl_akhir');
		$data['tgl_print'] = new datetime();
		$data['join'] = $this->m_peminjaman->tampilby_tgl($tgl_awal, $tgl_akhir);
		$this->load->view('laporan/la_transaksi', $data);
	}


	function la_buku(){
		$data['join'] = $this->m_buku_->tampildata();
		$this->load->view('laporan/la_buku', $data);
	}

	function la_anggota(){
		$data['join'] = $this->m_anggota->tampildata();
		$this->load->view('laporan/la_anggota', $data);
		
	}
}