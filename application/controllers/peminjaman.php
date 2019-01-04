<?php
clss Peminjaman extends ci_controller{
	function __construct(){
		parent::__construct();

	}

	function index(){
		$this->load->view('peminjaman');
	}
}