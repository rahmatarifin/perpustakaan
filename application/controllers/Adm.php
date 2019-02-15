<?php
defined('BASEPATH')	OR exit ('no direct script access allowed');
class Adm extends ci_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_login');
		$this->load->model('m_petugas');
		$this->load->model('m_kategori');
		$this->load->model('m_buku_');
		$this->load->model('m_anggota');
		$this->load->model('m_peminjaman');

		if($this->session->userdata('username') == ""){
			redirect(base_url('login'));
		}
	}

	function index(){
		//$this->load->view('web_dinamis');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$this->load->view('templates/r_panel');
		$this->load->view('templates/v_footer');
		
	}

//anggota--------------------------------------------------------

	function anggota(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$data['data'] = $this->m_anggota->tampildata();
		$this->load->view('anggota/a_anggota', $data);
		$this->load->view('templates/v_footer');
	}

	function tambahanggota(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$this->load->view('anggota/a_tambah');
		$this->load->view('templates/v_footer');
	}

	function anggota_tambah(){
		$data = array(
			'nis' => $this->input->post('nis'),
			'nama_anggota' => $this->input->post('nama_anggota'),
			'jk' => $this->input->post('jk'),
			'alamat' => $this->input->post('alamat'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir')
			);

		$this->m_anggota->tambah($data);
		redirect('adm/a_anggota');
	}

	function editanggota(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$nis = $this->uri->segment(3);
		$data['data'] = $this->m_anggota->per_nis($nis);
		$this->load->view('anggota/a_update', $data);
		$this->load->view('templates/v_footer');
	}

	function hapusanggota(){
		$nis = $this->uri->segment(3);
		$this->m_anggota->hapus($nis);
		redirect(base_url('adm/anggota'));
	}

	function update_anggota(){
		$nis = $this->input->post('nis');
		$data = array(
			'nama_anggota' => $this->input->post('nama_anggota'),
			'jk' => $this->input->post('jk'),
			'alamat' => $this->input->post('alamat'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir')
		);

		$this->m_anggota->update($nis, $data);
		redirect('adm/anggota');
	}
//buku---------------------------------------------------------

	function buku(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$data['join']=$this->m_buku_->tampildata();
		$this->load->view('buku/a_buku', $data);
		$this->load->view('templates/v_footer');
	}

	function tambahbuku(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$kode_k = $this->uri->segment(3);
		$data['dd_kategori'] = $this->m_buku_->getdd();
		$this->load->view('buku/a_tambah', $data);
		$this->load->view('templates/v_footer');
	}

	function buku_tambah(){
		$data = array(
			'kode_buku' => $this->input->post('kode_buku'),
			'judul' => $this->input->post('judul'),
			'pengarang' => $this->input->post('pengarang'),
			'tahun_terbit' => $this->input->post('tahun_terbit'),
			'penerbit' => $this->input->post('penerbit'),
			'isbn' => $this->input->post('isbn'),
			'kode_kategori' => $this->input->post('kode_kategori'),
			);
		$this->m_buku_->tambah($data);
		redirect('adm/buku');
	}

	function update_buku(){
		$kode_ = $this->input->post('kode_buku');
		$data = array(
			'judul' => $this->input->post('judul'),
			'pengarang' => $this->input->post('pengarang'),
			'tahun_terbit' => $this->input->post('tahun_terbit'),
			'penerbit' => $this->input->post('penerbit'),
			'isbn' => $this->input->post('isbn'),
			'kode_kategori' => $this->input->post('kode_kategori'),
			);
		$this->m_buku_->update($kode_, $data);
		redirect('adm/buku');
	}

	function editbuku(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$kode_ = $this->uri->segment(3);
		$data['dd_kategori'] = $this->m_buku_->getdd();
		$data['data'] = $this->m_buku_->per_kode($kode_);
		$this->load->view('buku/a_update', $data);
		$this->load->view('templates/v_footer');
	}

	function hapusbuku(){
		$kode_ = $this->uri->segment(3);
		$this->m_buku_->hapus($kode_);
		redirect('adm/buku');
	}
//kategori---------------------------------------------------------------------
	function kategori(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$data['data'] = $this->m_kategori->tampildata();
		$this->load->view('kategori/a_kategori', $data);
		$this->load->view('templates/v_footer');
	}

	function tambahkategori(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$this->load->view('kategori/a_tambah');
		$this->load->view('templates/v_footer');
	}

	function kategori_tambah(){
		$data = array('kode_kategori' => $this->input->post('kode_kategori'),
			'jenis_kategori' => $this->input->post('jenis_kategori')
			);

		$this->m_kategori->tambah($data);
		redirect('adm/kategori');
	}

	function editkategori(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$id_kategori = $this->uri->segment(3);
		$data['data'] = $this->m_kategori->per_id($id_kategori);
		$this->load->view('kategori/a_update', $data);
		$this->load->view('templates/v_footer');

	}

	function update_kategori(){
		$kode_kategori = $this->input->post('kode_kategori');
		$data = array('jenis_kategori' => $this->input->post('jenis_kategori'));

		$this->m_kategori->update($kode_kategori, $data);
		redirect('adm/kategori');
	}

	function hapus_kategori(){
		$kode_kategori = $this->uri->segment(3);
		$this->m_kategori->hapus($kode_kategori);

		redirect('adm/kategori');
	}
//peminjaman--------------------------------------------------------------
	function pinjam(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$data['join'] = $this->m_peminjaman->tampiljoin();
		$this->load->view('pinjam/a_peminjaman', $data);
		$this->load->view('templates/v_footer');
	}

	function tambahpinjam(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$kode_ = $this->uri->segment(3);
		$data['kode_buku'] = $this->m_peminjaman->cari_buku($kode_);
		$this->load->view('pinjam/a_tambah', $data);
		$this->load->view('templates/v_footer');
	}

	function pinjam_tambah(){
		$data = array(
				'kode_transaksi' => $this->input->post('kode_transaksi'),
				'nis' => $this->input->post('nis'),
				'kode_buku' => $this->input->post('kode_buku'),
				'tanggal_pinjam' => date_format(date_create($this->input->post('tanggal_pinjam')), 'y-m-d h:i:s'),
				//'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
				'status' => $this->input->post('status')
			);
		$this->m_peminjaman->pinjam($data);
		redirect('adm/pinjam');
	
	}

	function a_balik(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$this->load->view('kembali/a_back');
		$this->load->view('templates/v_footer');
	}

	function pengembalian(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$id_tr = $this->uri->segment(3);
		$data['join'] = $this->m_peminjaman->per_id($id_tr);
		$this->load->view('kembali/a_pengembalian', $data);
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
		redirect('adm/pinjam');
	}

	function detail_transaksi(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$id_tr = $this->uri->segment(3);
		$data['join'] = $this->m_peminjaman->per_id($id_tr);
		$this->load->view('kembali/a_detail_kembali', $data);
		$this->load->view('templates/v_footer');

	}


	function data_pinjam(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$status = 'pinjam';
		$data['join'] = $this->m_peminjaman->bystatus($status);
		$this->load->view('pinjam/a_data_pinjam', $data);
		$this->load->view('templates/v_footer');
	}

	function data_kembali(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
		$status = 'kembali';
		$data['join'] = $this->m_peminjaman->bystatus($status);
		$this->load->view('kembali/a_data_kembali', $data);
		$this->load->view('templates/v_footer');
	}

	function cari_transaksi(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/v_head');
		$this->load->view('templates/leftpan');
		$this->load->view('templates/r_header', $data);
//		$nis = $this->input->post('nis');
		$kode_buku = $this->input->post('kode_buku');
		$data['join'] = $this->m_peminjaman->per_nis( $kode_buku);
		$this->load->view('kembali/a_pengembalian', $data);
		$this->load->view('templates/v_footer');		
	}

	function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}

}