<?php
class M_buku_ extends ci_model{
	function tampil(){
		$query->this->db->get('buku');
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}

	}
	function tampildata(){
		$this->db->select('*');
		$this->db->from('buku');
		$this->db->join('kategori', 'kategori.kode_kategori=buku.kode_kategori');

		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}


	function getdd(){
		$query = $this->db->get('kategori');	
		return $query->result();
	}

	function dd_kode($kode_k){
		$this->db->where('kode_kategori', $kode_k);
		$query = $this->db->get('kategori');
		return $query->result();
	}

	function tambah($data){
		$tambah = $this->db->insert('buku', $data);
		return $tambah;
	}

	function per_kode($kode_){
		$this->db->where('kode_buku', $kode_);
		$query = $this->db->get('buku');
		return $query->result();
	}

	function hapus($kode_){
		$this->db->where('kode_buku', $kode_);
		$hapus = $this->db->delete('buku');
		return $hapus;
	}

	function update($kode_, $data){
		$this->db->where('kode_buku', $kode_);
		$update = $this->db->update('buku', $data);
		return $update;
	}
}