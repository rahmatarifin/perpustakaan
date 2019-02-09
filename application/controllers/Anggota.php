<?php
class Anggota extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_anggota');
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


	function tambah(){
		$data = array(
			'nis' => $this->input->post('nis'),
			'nama_anggota' => $this->input->post('nama_anggota'),
			'Jk' => $this->input->post('jk'),
			'alamat' => $this->input->post('alamat'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir')
		);
		$this->m_anggota->tambah($data);
		redirect('anggota');
	}

	function edit(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan_petugas');
		$this->load->view('templates/r_header', $data);
		$nis = $this->uri->segment(3);
		$data['data'] = $this->m_anggota->per_nis($nis);
		$this->load->view('anggota/update', $data);
		$this->load->view('templates/v_footer');
	}

	function update(){
		$nis = $this->input->post('nis');
		$data = array('nama_anggota' =>$this->input->post('nama_anggota'),
			'jk' => $this->input->post('jk'),
			'alamat' => $this->input->post('alamat'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir')
			);
		$this->m_anggota->update($nis, $data);
		redirect('anggota');
	}

	function hapus(){
		$nis = $this->uri->segment(3);
		$this->m_anggota->hapus($nis);
		redirect(base_url('anggota'));
	}
}