<?php

class Kategori extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_kategori');
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

	function add(){
		$data = array(
			'jenis_kategori' => $this->input->post('jenis_kategori')
		);

		$this->m_kategori->tambah($data);
		redirect('kategori');
	}

	function edit(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan_petugas');
		$this->load->view('templates/r_header', $data);
		$id_kategori = $this->uri->segment(3);
		$data['data'] = $this->m_kategori->per_id($id_kategori);
		$this->load->view('kategori/update', $data);
		$this->load->view('templates/v_footer');

	}

	function update(){
		$id_kategori = $this->input->post('kode_kategori');
		$data = array('kategori' => $this->input->post('kategori'));
		$this->m_kategori->update($id_kategori, $data);
		redirect('kategori');
	}

	function hapus(){
		$id_kategori = $this->uri->segment(3);
		$this->m_kategori->hapus($id_kategori);
		redirect('kategori');
	}
}