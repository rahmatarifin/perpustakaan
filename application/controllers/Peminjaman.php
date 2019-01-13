<?php
class Peminjaman extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_peminjaman');
	}

	function index(){
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header');
		$data['join'] = $this->m_peminjaman->tampiljoin();
		$this->load->view('pinjam/peminjaman', $data);
		$this->load->view('templates/v_footer');
	}

	function add_pinjam(){
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header');
		$kode_ = $this->uri->segment(3);
		$data['kode_buku'] = $this->m_peminjaman->cari_buku($kode_);
		$this->load->view('pinjam/tambah', $data);
		$this->load->view('templates/v_footer');
	}


	function pinjam(){
		$data = array(
				'id_transaksi' => $this->input->post('id_transaksi'),
				'nis' => $this->input->post('nis'),
				'kode_buku' => $this->input->post('kode_buku'),
				'tanggal_pinjam' => date_format(date_create($this->input->post('tanggal_pinjam')), 'y-m-d h:i:s'),
				'status' => $this->input->post('status')
			);
		$this->m_peminjaman->pinjam($data);
		redirect('peminjaman');
	}

	
}