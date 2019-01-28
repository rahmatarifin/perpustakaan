<?php
Class Lappdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('m_peminjaman');
    }
    
    function index(){
        $pdf = new FPDF('L','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        #header
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUAN NASIONAL BANTUL',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'Data Transaksi perpustakaan',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        #header
        
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
/*
        $pdf->SetWidths(array(5,5,5,5,6,8,4));
        $pdf->SetHeight(0.1);
        $pdf->Row(array("Tanggal Pinjam", "Tanggal Kembali", "NIS", "Kode Buku", "Nama Anggota", "Judul", "Status"));
  */
        $pdf->Cell(40,6,'Tanggal Pinjam',1,0);
        $pdf->Cell(40,6,'Tanggal Kembali',1,0);
        $pdf->Cell(30,6,'NIS',1,0);
        $pdf->Cell(30,6,'Kode Buku',1,0);
        $pdf->Cell(40,6,'Nama Anggota',1,0);
        $pdf->Cell(70,6,'Judul',1,0);
        $pdf->Cell(30,6,'Status',1,1);

        

        $pdf->SetFont('Arial','',10);

        $transaksi = $this->m_peminjaman->tampiljoin();



        foreach ($transaksi as $row){
            $pdf->MultiCell(40,6,$row->tanggal_pinjam,1,'L',false);
            $pdf->MultiCell(40,6,$row->tanggal_kembali,1,'L',false);
            $pdf->MultiCell(30,6,$row->nis,1,'L',false);
            $pdf->MultiCell(30,6,$row->kode_buku,1,'L',false);
            $pdf->MultiCell(40,6,$row->nama_anggota,1,'L',false);
            $pdf->MultiCell(70,6,$row->judul,1,'L',false);
            $pdf->MultiCell(30,6,$row->status,1,'L',false);
        }
       
        $pdf->Output();
    }

    function filter(){
        $data['username'] = $this->session->userdata('username');
        $this->load->view('templates/v_head');
        $this->load->view('templates/leftpan_petugas');
        $this->load->view('templates/r_header', $data);
        $this->load->view('laporan/filter');
        $this->load->view('templates/v_footer');
    }
}