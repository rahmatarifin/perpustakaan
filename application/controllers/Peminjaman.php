<?php
class Peminjaman extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_peminjaman');
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
		$data['join'] = $this->m_peminjaman->tampiljoin();
		$this->load->view('pinjam/peminjaman', $data);
		$this->load->view('templates/v_footer');
	}

	function add_pinjam(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan_petugas');
		$this->load->view('templates/r_header', $data);
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

	function pengembalian(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan_petugas');
		$this->load->view('templates/r_header', $data);
		$id_tr = $this->uri->segment(3);
		$data['join'] = $this->m_peminjaman->per_id($id_tr);
		$this->load->view('kembali/pengembalian', $data);
		$this->load->view('templates/v_footer');
	}

	function update(){

		/*$tanggal_pinjam = $this->input->post('tanggal_pinjam');
		$date_now = date('d-m-Y G:i:s');
		$interfal = $tanggal_pinjam->diff($date_now);

		$hasil = $interfal-7;
		if($hasil>0){
			$denda = $hasil*1000;
		}else{
			$denda = 0;
		}*/

		$id_tr = $this->input->post('id_transaksi');
		$data = array(
			'nis' => $this->input->post('nis'),
			'kode_buku' => $this->input->post('kode_buku'),
			'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
			'tanggal_kembali' => date_format(date_create($this->input->post('tanggal_kembali')), 'y-m-d h:i:s'),
			'denda' => $this->input->post('$denda'),
			'status' => $this->input->post('status')
			);
		$this->m_peminjaman->update($id_tr, $data);
		redirect('peminjaman');
	}

	
}