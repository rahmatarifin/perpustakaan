<?php
class Laporanpdf extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->library('pdf');
	}

	function index(){
		$pdf = new FPDF('l', 'mm', 'A5')
		$pdf->AddPage();
		$pdf->setFont('Arial', 'B', 16);
		$pdf->Cell(190, 7, 'SEKOLAH MENENGAH KEJURUSAN NASIONAL BANTUL');
		$pdf->setFont('Arial', 'B', 12);
		$pdf->Cell(190, 7, 'DAFTAR TRANSAKSI PERPUSTAKAAN');
	}
}