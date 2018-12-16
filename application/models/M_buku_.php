<?php
class M_buku_ extends ci_model{
	function tampildata(){
		$query = $this->db->get('buku');
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
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