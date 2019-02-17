<?php
class M_buku_ extends ci_model{

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

	public function kode(){
		  $this->db->select('RIGHT(buku.kode_buku,2) as kode_buku', FALSE);
		  $this->db->order_by('kode_buku','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('buku');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->kode_buku) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  $tgl=date('dmY'); 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "BR"."5".$tgl.$batas;  //format kode
			  return $kodetampil;  
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