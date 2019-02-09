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
		$data['title'] = 'Data Peminjaman';
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head', $data);
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
		$data['kode_transaksi'] = $this->m_peminjaman->get_kode();
		$this->load->view('pinjam/tambah', $data);
		$this->load->view('templates/v_footer');
	}


	function pinjam(){
		$data = array(
				'kode_transaksi' => $this->input->post('kode_transaksi'),
				'nis' => $this->input->post('nis'),
				'kode_buku' => $this->input->post('kode_buku'),
				'tanggal_pinjam' => date_format(date_create($this->input->post('tanggal_pinjam')), 'y-m-d h:i:s'),
				//'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
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




		$data['join'] = $this->m_peminjaman->tampiljoin();

		$tgl_pinjam = $this->input->post('tanggal_pinjam');
		foreach ($data as $transaksi) {
			
		
			$tgl_awal = new datetime($transaksi->tanggal_pinjam);

		}

		$tgl_kembali = new datetime(date_format(date_create($this->input->post('tanggal_pinjam')), 'y-m-d h:i:s'));

		$selisih = $tgl_kembali->diff($tgl_awal)->format('%a');
		if($selisih-7<=0){
			$denda = 0;
		}else{
			$denda = ($selisih-7)*1000;
		}

		$id_tr = $this->input->post('kode_transaksi');
		$data = array(
			'nis' => $this->input->post('nis'),
			'kode_buku' => $this->input->post('kode_buku'),
			'tanggal_pinjam' => $tgl_pinjam,
			'tanggal_kembali' => date_format(date_create($this->input->post('tanggal_kembali')), 'y-m-d h:i:s'),
			'denda' => $this->input->post('denda'),
			'status' => $this->input->post('status')
			);
		$this->m_peminjaman->update($id_tr, $data);
		redirect('peminjaman');
	}


	function printlaporan(){
		
		
		$data['join'] = $this->m_peminjaman->tampiljoin();
		$this->load->view('laporan/l_transaksi', $data);
	}

	function detail_transaksi(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan_petugas');
		$this->load->view('templates/r_header', $data);
		$id_tr = $this->uri->segment(3);
		$data['join'] = $this->m_peminjaman->per_id($id_tr);
		$this->load->view('pinjam/detail_transaksi', $data);
		$this->load->view('templates/v_footer');
	}
}