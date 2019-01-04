<?php

class Buku_ extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_buku_');
	}

	function index(){
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header');
		$data['data']=$this->m_buku_->tampildata();
		$this->load->view('buku/buku', $data);
		$this->load->view('templates/v_footer');
	}

	function tambahbuku(){
		$this->load->view('buku/tambah');
	}

	function tambah(){
		$data = array(
			'kode_buku' => $this->input->post('kode_buku'),
			'judul' => $this->input->post('judul'),
			'pengarang' => $this->input->post('pengarang'),
			'description' => $this->input->post('description')
			);

		$this->m_buku_->tambah($data);
		redirect('buku_');
	}

	function edit(){
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header');
		$kode_ = $this->uri->segment(3);
		$data['data'] = $this->m_buku_->per_kode($kode_);
		$this->load->view('buku/update', $data);
		$this->load->view('templates/v_footer');
	}

	function update(){
		$kode = $this->input->post('kode_buku');
		$data = array('judul' => $this->input->post('judul'),
			'pengarang' => $this->input->post('pengarang'),
			'description' => $this->input->post('description'));
		$this->m_buku_->update($kode_, $data);
		redirect('buku_');
	}

	function hapus(){
		$kode_ = $this->uri->segment(3);
		$this->m_buku_->hapus($kode_);
		redirect('buku_');
	}
}