<?php
class Buku extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_buku');
	}

	function index(){
		$data['data'] = $this->m_buku->tampildata();
		$this->load->view('buku/v_buku', $data);
	}

	function tambah(){
		$config['upload_path'] = './assets/images/';
		$config['allowed_type'] = 'gif|jpg|png';
		$config['max_size'] = 100;
		$config['max_width'] = 1024;
		$config['max_height']= 768;

		$this->load->library('upload', $config);

		if(!$this->buku->tambah('userfile')){
			$error = array('error' => $this->buku->display_errors());
			$this->load->view('buku/tambah');
		}else{
			$data = array('upload_data' => $this->buku->data());
		}

		$data = array('kodebuku' => $this->insert->post('kode_buku'),
			'judul' => $this->input->post('judul'),
			'pengarang' => $this->input->post('pengarang'),
			'klarifikasi' => $this->input->post('klarifikasi')
			);
		$this->m_buku->tambah($data);
		redirect('buku');
	}

	function aksitambah(){
				
	}
}