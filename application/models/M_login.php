<?php
class M_login extends ci_model{
	function cek_login($data){
		$query = $this->db->get_where('petugas', $data);
		return $query;
	}
}