<?php
class Anggota extends ci_controller{
	function __construct(){
		parent::__construct();

		$this->load->model('m_anggota');
	}

	function index(){
		$data['data'] = $this->m_anggota->tampildata();
		$this->load->view('anggota/v_anggota', $data);
	}

	function tambahanggota(){
		$this->load->view('anggota/tambah', $data);
	}


	function tambah(){
		$data = array('nis' => $this->input->post('nis'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'));
		$this->m_anggota->tambah($data);
		redirect('anggota');
	}

	function edit(){
		$nis = $this->uri->segment(3);
		$data['data'] = $this->m_anggota->per_nis($nis);
		$this->load->view('anggota/update', $data);
	}

	function update(){
		$nis = $this->input->post('nis');
		$data = array('nama' =>$this->input->post('nama'),
			'alamat' => $this->input->post('alamat')
			);
		$this->m_anggota->update($nis, $data);
		redirect('anggota');
	}

	function hapus(){
		$nis = $this->uri->segment(3);
		$this->m_anggota->hapus($nis);
		redirect('anggota');
	}
}