<?php
class Anggota extends ci_controller{
	function __construct(){
		parent::__construct();

		$this->load->model('m_anggota');
	}

	function index(){
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header');
		$data['data'] = $this->m_anggota->tampildata();
		$this->load->view('anggota/anggota', $data);
		$this->load->view('templates/v_footer');
	}

	function tambahanggota(){
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header');
		$this->load->view('anggota/tambah');
		$this->load->view('templates/v_footer');
	}


	function tambah(){
		$data = array(
			'nis' => $this->input->post('nis'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat')
		);
		$this->m_anggota->tambah($data);
		redirect('anggota');
	}

	function edit(){
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header');
		$nis = $this->uri->segment(3);
		$data['data'] = $this->m_anggota->per_nis($nis);
		$this->load->view('anggota/update', $data);
		$this->load->view('templates/v_footer');
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