<?php
class M_buku extends ci_model{

	private $_table = "buku";

	public $kode_buku;
	public $judul;
	public $pengarang;
	public $description;
	public $image = "default.jpg";

	public function rules(){
		return [
			['field' => 'judul',
			'label' => 'judul',
			'rules' => 'required'],

			['field' => 'pengarang',
			'label' => 'pengarang',
			'rules' => 'required'],

			['field' => 'description',
			'label' => 'description',
			'rules' => 'required']
		];
	}

	public function getall(){
		return $this->db->get($this->table)->result();
	}

	public function getbyid($id){
		return $this->db->get_where($this->buku, ['kode_buku' => $id]);
	}

	public function save(){
		$post = $this->input->post();
		$this->kode_buku = uniqid()
		$this->judul = $post["judul"];
		$this->pengarang = $post["pengarang"];
		$this->description = $post['description'];
		$this->db->insert($this->table, $this);
	}

	public function update(){
		$post = $this->input->post();
		$this->kode_buku = $post['id']
		$this->judul = $post["judul"];
		$this->pengarang = $post["pengarang"];
		$this->description = $post['description'];
		$this->db->update($this->_table,$this, array('kode_buku' =>$post['kode_buku']));
	}

	public function delete($kode_buku){
		return $this->db->delete($this->_table, array("kode_buku" =>$kode_buku));
	}
		
}