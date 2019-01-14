<?php 
class Petugas extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_petugas');
		$this->load->model('m_login');

		if($this->session->userdata('username') == ""){
			redirect(base_url('login'));
		}
	}

	function index(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$data['data'] = $this->m_petugas->tampildata();
		$this->load->view('petugas/v_petugas', $data);
		$this->load->view('templates/v_footer');

		
	}

	function add_petugas(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$this->load->view('petugas/tambah');
		$this->load->view('templates/v_footer');
	}

	function add(){
		$data = array(
			'id_petugas' => $this->input->post('id_petugas'),
			'nama_petugas' => $this->input->post('nama_petugas'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
			);
		$this->m_petugas->tambah($data);
		redirect('petugas');
	}

	function edit(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$id_petugas = $this->uri->segment(3);
		$data['data'] = $this->m_petugas->per_id($id_petugas);
		$this->load->view('petugas/update', $data);
		$this->load->view('templates/v_footer');
	}

	function update(){
		$id_petugas = $this->input->post('idpetugas');
		$data = array(
			'nama_petugas' => $this->input->post('nama_petugas'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
			);
		$this->m_petugas->update('id_petugas', $data);
		redirect(base_url('petugas'));
	}

	function hapus(){
		$id_petugas = $this->uri->segment(3);
		$this->m_petugas->hapus($id_petugas);
		redirect('petugas');
	}
}