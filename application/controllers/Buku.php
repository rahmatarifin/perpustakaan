<?php
class Buku extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_buku');
		$this->load->library('form_validation');
	}

	function index(){
		$data['buku'] = $this->m_buku->getAll();
		$this->load->view('buku/v_buku', $data);
	}

	function add(){

		$buku = $this->m_buku;
		$validation = $this->form->validation;
		$validation->set_rules($buku->rules());

		if($validation->run()){
			$buku->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$this->load->view("#")

/*
		$data = array('kodebuku' => $this->insert->post('kode_buku'),
			'judul' => $this->input->post('judul'),
			'pengarang' => $this->input->post('pengarang'),
			'klarifikasi' => $this->input->post('klarifikasi')
			);
		$this->m_buku->tambah($data);
		redirect('buku');
*/
	}

	public function edit($kode_buku = null){
		if(!isset($kode_buku)) redirect('#');

		$buku = $this->m_buku;
		$validation = $this->form_validation;
		$validation->set_rules($buku->rules());

		if($validation->run()){
			$buku->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$data["buku"] = $buku->getby($kode_buku);
		if(!$data["buku"]) show_404();

		$this->load->view("buku/edit_form", $data);
	}

	public function delete($kode_buku=null){
		if(!isset($kode_buku)) show_404();

		if($this->m_buku->delete($kode_buku)){
			redirect(base_url('buku'));
		}
	}
}