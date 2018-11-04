<?php
class M_anggota extends ci_model{
	function tampildata(){
		$query = $this->db->get('anggota');
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}

	function tambah($data){
		$tambah = $this->db->insert('anggota', $data);
		return $tambah;
	}

	function per_nis($nis){
		$this->db->where('nis', $nis);
		$query = $this->db->get('anggota');
		return $query->result();
	}

	function hapus($nis){
		$this->db->where('nis', $nis);
		$hapus=$this->db->delete('anggota');
		return $hapus;
	}

	function update($nis, $data){
		$this->db->where('nis', $nis);
		$update = $this->db->update('anggota', $data);
		return $update;
	}
	
}