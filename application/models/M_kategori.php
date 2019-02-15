<?php
class M_kategori extends ci_model{
	function  tampildata(){
		$query = $this->db->get('kategori');
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}

	function tambah($data){
		$tambah = $this->db->insert('kategori', $data);
		return $tambah;
	}

	function per_id($id_kategori){
		$this->db->where('kode_kategori', $id_kategori);
		$query = $this->db->get('kategori');
		return $query->result();
	}

	function hapus($id_kategori){
		$this->db->where('kode_kategori', $id_kategori);
		$hapus = $this->db->delete('kategori');
		return $hapus;
	}

	function update($id_kategori, $data){
		$this->db->where('kode_kategori', $id_kategori);
		$update = $this->db->update('kategori', $data);
		return $update;
	}
}