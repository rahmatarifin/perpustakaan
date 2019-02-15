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
		$data['join'] = $this->m_pengembalian->per_id($id_tr);
		$this->load->view('kembali/pengembalian', $data);
		$this->load->view('templates/v_footer');	
	}


	function kembali(){
		
		$this->db->query('select tanggal_pinjam from transaksi as $tanggal_pinjam where ');
		date_default_timezone_set('Asia/Jakarta');
		$date = date('d-m-Y G:i:s');
		$interfal = $tanggal_pinjam->diff($date);

		$hasil = $interfal - 7; 
		if($hasil>0){
			$denda = $hasil * 1000;
		}else{
			$denda = 0;
		}

		$id_tr = $this->input->post('id_transaksi');

		$data = array(	
				'nis' => $this->input->post('nis'),
				'kode_buku' => $this->input->post('kode_buku'),
				'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
				//'tanggal_kembali' => date_format(date_create($this->input->post('tanggal_kembali')), 'd-m-Y G:i:s'),
				'tanggal_kembali' => $this->input->post($date),
				'denda' => $this->input->post('.$denda.')
			);
		$this->m_pengembalian->kembali($id_tr, $data);
		redirect('peminjaman');
	}

}