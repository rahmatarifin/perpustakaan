<?php 
//if(!define('BASEPATH')) exit('No direct script access allowed');
class Buku_ extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_buku_');
		$this->load->model('m_login');

		if($this->session->userdata('username') == ""){
			redirect(base_url('login'));
		}
	}



	function index(){
		$data['title'] = 'Data Buku';
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head', $data);
		$this->load->view('templates/leftpan_petugas');
		$this->load->view('templates/r_header', $data);
		$data['join']=$this->m_buku_->tampildata();
		$this->load->view('buku/buku', $data);
		$this->load->view('templates/v_footer');
	}

	function tambahbuku(){
		$data['kode'] = $this->m_buku_->kode();

		$data['username'] = $this->session->userdata('username');
		$data['title'] = 'Form Tambah Buku';
		$this->load->view('templates/v_head', $data);
		$this->load->view('templates/leftpan_petugas');
		$this->load->view('templates/r_header', $data);
		$kode_k = $this->uri->segment(3);
		$data['tampil'] = $this->m_buku_->tampildata();
		$data['dd_kategori'] = $this->m_buku_->getdd();
		$this->load->view('buku/tambah', $data);
		$this->load->view('templates/v_footer');
	}


	function tambah(){//
		$data = array(
			'kode_buku' => $this->input->post('kode_buku'),
			'judul' => $this->input->post('judul'),
			'pengarang' => $this->input->post('pengarang'),
			'tahun_terbit' => $this->input->post('tahun_terbit'),
			'penerbit' => $this->input->post('penerbit'),
			'isbn' => $this->input->post('isbn'),
			'kode_kategori' => $this->input->post('kode_kategori'),
			);
		$this->m_buku_->tambah($data);
		redirect('buku_');
	}
	

	function edit(){
		$data['username'] = $this->session->userdata('username');
		$data['title'] = 'Update Data Buku';
		$this->load->view('templates/v_head', $data);
		$this->load->view('templates/leftpan_petugas');
		$this->load->view('templates/r_header', $data);
		$kode_ = $this->uri->segment(3);
		$data['dd_kategori'] = $this->m_buku_->getdd();
		$data['data'] = $this->m_buku_->per_kode($kode_);
		$this->load->view('buku/update', $data);
		$this->load->view('templates/v_footer');
	}

	function update(){
		$kode_ = $this->input->post('kode_buku');
		$data = array(
			'judul' => $this->input->post('judul'),
			'pengarang' => $this->input->post('pengarang'),
			'tahun_terbit' => $this->input->post('tahun_terbit'),
			'penerbit' => $this->input->post('penerbit'),
			'isbn' => $this->input->post('isbn'),
			'kode_kategori' => $this->input->post('kode_kategori')
			);
		$this->m_buku_->update($kode_, $data);
		redirect('buku_');	
	}

	function hapus(){
		$kode_ = $this->uri->segment(3);
		$this->m_buku_->hapus($kode_);
		redirect('buku_');
	}

	function printlaporan(){
		$data['title'] = 'Laporan Buku';
		$data['data'] = $this->m_buku_->tampildata();
		$this->load->view('laporan/l_buku', $data);
	}
}