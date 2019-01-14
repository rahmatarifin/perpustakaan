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

	function per_id($id_tr){
		
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('buku', 'buku.kode_buku=transaksi.kode_buku');
		$this->db->join('anggota', 'anggota.nis=transaksi.nis');
		$this->db->where('id_transaksi', $id_tr);
		
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
		$id_tr = $this->db->where('id_transaksi', $id_tr);
		$kembali = $this->db->update('transaksi', $data);
		return $kembali;
	}


}