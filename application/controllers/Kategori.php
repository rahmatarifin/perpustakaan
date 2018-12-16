<?php

class Kategori extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_kategori');
	}

	function index(){
		$data['data'] = $this->m_kategori->tampildata();
		$this->load->view('kategori/v_kategori', $data);
	}

	function add_kategori(){
		$this->load->view('kategori/tambah');
	}

	function add(){
		$data = array(
			'id_kategori' => $this->input->post('idkategori'),
			'kategori' => $this->input->post('kategori'));

		$this->m_kategori->tambah($data);
		redirect('kategori');
	}

	function edit(){
		$id_kategori = $this->uri->segment(3);
		$data['data'] = $this->m_kategori->per_id($id_kategori);
		$this->load->view('kategori/update', $data);
	}

	function update(){
		$id_kategori = $this->input->post('idkategori');
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