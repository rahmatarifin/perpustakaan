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
		$data['join'] = $this->m_peminjaman->tampilby_tgl($tgl_awal, $tgl_akhir);
		$this->load->view('laporan/La_transaksi', $data);
	}

	function by_nis(){
		$nis = $this->input->post('nis');
		$data['join'] = $this->m_peminjaman->by_nis($nis);
		$this->load->view('laporan/transaksiby_nis', $data);
	}

	function filter_kembali(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$this->load->view('laporan/filter_pengembalian');
		$this->load->view('templates/v_footer');
	}

	function pengembalian(){
		$tgl_awal = $this->input->post('tgl_awal');
		$tgl_akhir = $this->input->post('tgl_akhir');
		$status = 'kembali';
		$data['kembali'] = $this->m_peminjaman->bystatuskembali($tgl_awal, $tgl_akhir, $status);
		$this->load->view('laporan/pengembalian', $data);
	}

	function filter_pinjam(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$this->load->view('laporan/filter_peminjaman');
		$this->load->view('templates/v_footer');
	}

	function peminjaman(){
		$tgl_awal = $this->input->post('tgl_awal');
		$tgl_akhir = $this->input->post('tgl_akhir');
		$status = 'pinjam';
		$data['pinjam'] = $this->m_peminjaman->bystatuspinjam($tgl_awal, $tgl_akhir, $status);
		$this->load->view('laporan/peminjaman', $data);
	}


	function la_buku(){
		$data['join'] = $this->m_buku_->tampildata();
		$this->load->view('laporan/La_buku', $data);
	}

	function la_anggota(){
		$data['join'] = $this->m_anggota->tampildata();
		$this->load->view('laporan/la_anggota', $data);
		
	}
}