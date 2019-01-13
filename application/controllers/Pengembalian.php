<?php
class Pengembalian extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pengembalian');
	}

		function index(){
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header');
		$id_tr = $this->uri->segment(3);
		$data['join'] = $this->m_pengembalian->tampiljoin();
		$this->load->view('kembali/v_kembali', $data);
		$this->load->view('templates/v_footer');
	}

	function add_kembali(){
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header');
		$id_tr = $this->uri->segment(3);
		$data['data'] = $this->m_pengembalian->per_kode($id_tr);
		$this->load->view('kembali/pengembalian', $data);
		$this->load->view('templates/v_footer');	
	}


	function kembali(){
		date_default_timezone_set('Asia/Jakarta');

		$data['tanggal_kembali'] = date('d-m-Y G:i:s');
		
		$id_tr = $this->input->post('id_transaksi');
		$tanggal_pinjam = $this->input->post('tanggal_pinjam');
		$data = array(	
				'nis' => $this->input->post('nis'),
				'kode_buku' => $this->input->post('kode_buku'),
				'tanggal_pinjam' => $tanggal_pinjam,
				'tanggal_kembali' => date_format(date_create($this->input->post('tanggal_kembali')), 'd-m-Y G:i:s'),
				'.$denda.' => $this->input->post('denda')
			);

		$this->m_pengembalian->kembali($id_tr, $data);
		redirect('peminjaman');
	}

}