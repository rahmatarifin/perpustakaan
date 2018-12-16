<?php
class M_petugas extends ci_model{
	function tampildata(){
		$query = $this->db->get('petugas');
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}

	function tambah($data){
		$tambah = $this->db->insert('petugas', $data);
		return $tambah;
	}

	function per_id($id_petugas){
		$this->db->where('id_petugas', $id_petugas);
		$query = $this->db->get('petugas');
		return $query->result();
	}

	function hapus($id_petugas){
		$this->db->where('id_petugas', $id_petugas);
		$hapus = $this->db->delete('petugas');
		return $hapus;
	}

	function update($id_petugas, $data){
		$this->db->where('id_petugas', $id_petugas);
		$update = $this->db->update('petugas', $data);
		return $update;
	}
}