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


	function tambah(){

		$data = array(
			'kode_buku' => $this->input->post('kode_buku'),
			'judul' => $this->input->post('judul'),
			'pengarang' => $this->input->post('pengarang'),
			'description' => $this->input->post('description'),
			'kode_kategori' => $this->input->post('kode_kategori'),
			'jumlah'=> $this->input->post('jumlah')
			);
		$this->m_buku_->tambah($data);
		redirect('buku_');
	}

	function edit(){
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan_petugas');
		$this->load->view('templates/r_header');
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
			'description'=> $this->input->post('description'),
			'kode_kategori' => $this->input->post('kode_kategori'),
			'jumlah'=> $this->input->post('jumlah')
			);
		$this->m_buku_->update($kode_, $data);
		redirect('buku_');	
	}

	function hapus(){
		$kode_ = $this->uri->segment(3);
		$this->m_buku_->hapus($kode_);
		redirect('buku_');
	}
}