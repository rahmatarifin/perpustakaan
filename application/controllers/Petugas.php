<?php 
class Petugas extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_petugas');
	}

	function index(){

		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header');
		$data['data'] = $this->m_petugas->tampildata();
		$this->load->view('petugas/v_petugas', $data);
		$this->load->view('templates/v_footer');

		
	}

	function add_petugas(){
		$this->load->view('petugas/tambah');
	}

	function add(){
		$data = array(
			'id_petugas' => $this->input->post('idpetugas'),
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			);
		$this->m_petugas->tambah($data);
		redirect('petugas');
	}

	function edit(){
		$id_petugas = $this->uri->segment(3);
		$data['data'] = $this->m_kategori->per_id($id_petugas);
		$this->load->view('petugas/update', $data);
	}

	function update(){
		$id_petugas = $this->input->post('idpetugas');
		$data = array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			);
	}

	function hapus(){
		$id_petugas = $this->uri->segment(3);
		$this->m_kategori->hapus($id_petugas);
		redirect('petugas');
	}
}