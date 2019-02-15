<?php
class M_peminjaman extends ci_model{
	function tampildata(){
		$query = $this->db->get('transaksi');
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}

	function get_kode(){
		$q = $this->db->select('max((RIGHT(kode_transaksi, 4)) as kd_max)');

	}

	function per_id($id_tr){
		
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('buku', 'buku.kode_buku=transaksi.kode_buku');
		$this->db->join('anggota', 'anggota.nis=transaksi.nis');
		$this->db->where('kode_transaksi', $id_tr);
		
		$query = $this->db->get();
		return $query->result();

	}

	function per_nis($kode_buku){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('buku', 'buku.kode_buku=transaksi.kode_buku');
		$this->db->join('anggota', 'anggota.nis=transaksi.nis');
		//$this->db->where('nis', $nis);
		$this->db->where('transaksi.kode_buku', $kode_buku);
		$query = $this->db->get();
		return $query->result();
	}

	function tampiljoin(){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('buku', 'buku.kode_buku=transaksi.kode_buku');
		$this->db->join('anggota', 'anggota.nis=transaksi.nis');

		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}

		function bystatus($status){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('buku', 'buku.kode_buku = transaksi.kode_buku');
		$this->db->join('anggota', 'anggota.nis=transaksi.nis');
		$this->db->where('status', $status);
		$query= $this->db->get();
		if ($query->num_rows()>0) {
			return $query->result();
		}else{
			return array();
		}
	}

	function bystatuspinjam($tgl_awal, $tgl_akhir, $status){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('buku', 'buku.kode_buku = transaksi.kode_buku');
		$this->db->join('anggota', 'anggota.nis=transaksi.nis');
		$this->db->where('tanggal_pinjam >=', $tgl_awal);
		$this->db->where('tanggal_pinjam <=', $tgl_akhir);
		$this->db->where('status', $status);
		$query= $this->db->get();
		if ($query->num_rows()>0) {
			return $query->result();
		}else{
			return array();
		}
	}

	function bystatuskembali($tgl_awal, $tgl_akhir, $status){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('buku', 'buku.kode_buku = transaksi.kode_buku');
		$this->db->join('anggota', 'anggota.nis=transaksi.nis');
		$this->db->where('tanggal_kembali >=', $tgl_awal);
		$this->db->where('tanggal_kembali <=', $tgl_akhir);
		$this->db->where('status', $status);
		$query= $this->db->get();
		if ($query->num_rows()>0) {
			return $query->result();
		}else{
			return array();
		}
	}


	function denda(){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where('DATEDIFF(NOW(), date_and_time) BETWEEN 30 AND 61');
		return $this->db->get()->result_array();
	}

	function cari_buku($kode_){
		$this->db->select('judul');
		$this->db->from('buku');
		$this->db->where('kode_buku', $kode_);
		$query = $this->db->get();
		return $query->result();
	}

	function pinjam($data){
		$pinjam = $this->db->insert('transaksi', $data);
		return $pinjam;
	}

	function update($id_tr, $data){
		$id_tr = $this->db->where('kode_transaksi', $id_tr);
		$kembali = $this->db->update('transaksi', $data);
		return $kembali;
	}

	function tampilby_tgl($tgl_awal, $tgl_akhir){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('buku', 'buku.kode_buku=transaksi.kode_buku');
		$this->db->join('anggota', 'anggota.nis=transaksi.nis');
		$this->db->where('tanggal_pinjam >=', $tgl_awal);
		$this->db->where('tanggal_pinjam <=', $tgl_akhir);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}
}