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

		public function kode_trans(){
		  $this->db->select('RIGHT(transaksi.kode_transaksi,2) as kode_transaksi', FALSE);
		  $this->db->order_by('kode_transaksi','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('transaksi');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->kode_transaksi) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  $tgl=date('dmY'); 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "TR"."5".$tgl.$batas;  //format kode
			  return $kodetampil;  
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

	function per_nis($nis, $kode_buku){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('buku', 'buku.kode_buku=transaksi.kode_buku');
		$this->db->join('anggota', 'anggota.nis=transaksi.nis');
		$this->db->where('transaksi.nis', $nis);
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
		if ($query->num_rows()>=0) {
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
		$this->db->where('tanggal_pinjam >==', $tgl_awal);
		$this->db->where('tanggal_pinjam <==', $tgl_akhir);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}
}