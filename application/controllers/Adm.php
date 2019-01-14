<?php
defined('BASEPATH')	OR exit ('no direct script access allowed');
class Adm extends ci_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_login');
		$this->load->model('m_petugas');
		$this->load->model('m_kategori');
		$this->load->model('m_buku_');
		$this->load->model('m_anggota');

		if($this->session->userdata('username') == ""){
			redirect(base_url('login'));
		}
	}

	function index(){
		//$this->load->view('web_dinamis');
		$data['username'] = $this->session->userdata('username');
		
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$this->load->view('templates/r_panel');
		$this->load->view('templates/v_footer');
		
	}

	function anggota(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan_petugas');
		$this->load->view('templates/r_header', $data);
		
		$data['data'] = $this->m_anggota->tampildata();
		$this->load->view('anggota/anggota', $data);
		$this->load->view('templates/v_footer');
	}

	function tambahanggota(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan_petugas');
		$this->load->view('templates/r_header', $data);
		$this->load->view('anggota/tambah');
		$this->load->view('templates/v_footer');
	}

	function editanggota(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan_petugas');
		$this->load->view('templates/r_header', $data);
		$nis = $this->uri->segment(3);
		$data['data'] = $this->m_anggota->per_nis($nis);
		$this->load->view('anggota/update', $data);
		$this->load->view('templates/v_footer');
	}

	function buku(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan_petugas');
		$this->load->view('templates/r_header', $data);
		$data['join']=$this->m_buku_->tampildata();
		$this->load->view('buku/buku', $data);
		$this->load->view('templates/v_footer');
	}

	function tambahbuku(){
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan_petugas');
		$this->load->view('templates/r_header');
		$kode_k = $this->uri->segment(3);
		$data['dd_kategori'] = $this->m_buku_->getdd();
		$this->load->view('buku/tambah', $data);
		$this->load->view('templates/v_footer');
	}

	function editbuku(){
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan_petugas');
		$this->load->view('templates/r_header');
		$kode_ = $this->uri->segment(3);
		$data['dd_kategori'] = $this->m_buku_->getdd();
		$data['data'] = $this->m_buku_->per_kode($kode_);
		$this->load->view('buku/update', $data);
		$this->load->view('templates/v_footer');
	}

	function kategori(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan_petugas');
		$this->load->view('templates/r_header', $data);
		$data['data'] = $this->m_kategori->tampildata();
		$this->load->view('kategori/v_kategori', $data);
		$this->load->view('templates/v_footer');
	}

	function tambahkategori(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan_petugas');
		$this->load->view('templates/r_header', $data);
		$this->load->view('kategori/tambah');
		$this->load->view('templates/v_footer');
	}

	function editkategori(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan_petugas');
		$this->load->view('templates/r_header', $data);
		$id_kategori = $this->uri->segment(3);
		$data['data'] = $this->m_kategori->per_id($id_kategori);
		$this->load->view('kategori/update', $data);
		$this->load->view('templates/v_footer');

	}

	function pinjam(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan_petugas');
		$this->load->view('templates/r_header', $data);
		$data['join'] = $this->m_peminjaman->tampiljoin();
		$this->load->view('pinjam/peminjaman', $data);
		$this->load->view('templates/v_footer');
	}

	function tambahpinjam(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan_petugas');
		$this->load->view('templates/r_header', $data);
		$kode_ = $this->uri->segment(3);
		$data['kode_buku'] = $this->m_peminjaman->cari_buku($kode_);
		$this->load->view('pinjam/tambah', $data);
		$this->load->view('templates/v_footer');
	}

	function pengembalian(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan_petugas');
		$this->load->view('templates/r_header', $data);
		$id_tr = $this->uri->segment(3);
		$data['join'] = $this->m_peminjaman->per_id($id_tr);
		$this->load->view('kembali/pengembalian', $data);
		$this->load->view('templates/v_footer');
	}
	

	function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}

}