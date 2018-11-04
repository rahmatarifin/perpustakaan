<?php
class M_buku extends ci_model{
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
}