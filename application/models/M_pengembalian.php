<?php 
class M_pengembalian extends ci_model{
	function tampil(){
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

	/*function denda($id_tr, $x){
		$id_tr = $this->db->where('id_transaksi')
		$tgl_kembali = $this->db->query('select tanggal_kembali where id_transaksi');
		$tgl_pinjam = $this->db->query('select tanggal_pinjam where id_transaksi');
		$x = $tgl_kembali - $tgl_pinjam;
		if($x>0){
			$denda = $x * 500;
		} else{
			$denda = 0;
		}

	}
/*
	function per_id($id_tr){
		$this->db->where('id_transaksi', $id_tr);
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('buku', 'buku.kode_buku=transaksi.kode_buku');
		$this->db->join('anggota', 'anggota.nis=transaksi.nis');
		$query = $this->db->get();
		return $query->result();

	}
*/
	function kembali($id_tr, $data){
		$this->db->where('id_transaksi', $id_tr);
		$update = $this->db->update('transaksi', $data);
		return $update;
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
}