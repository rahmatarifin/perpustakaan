<?php
Class Lappdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('m_peminjaman');
    }

    function index(){
        $data['username'] = $this->session->userdata('username');
        $this->load->view('templates/v_head');
        $this->load->view('templates/leftpan_petugas');
        $this->load->view('templates/r_header', $data);
        $this->load->view('laporan/filter');
        $this->load->view('templates/v_footer');
    }

    function cetakpdf(){
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


        echo "<table>";
        echo "<thead>";
        echo "<tr>";
            echo "<td> Tanggal Pinjam </td>";
            echo "<td> Tanggal Kembali </td>";
            echo "<td> NIS </td>";
            echo "<td> Nama Anggota </td>";
            echo "<td> Kode Buku </td>";
            echo "<td> Judul </td>";
            echo "<td> Denda </td>";
            echo "<td> Status </td>";
        echo "</tr>";
        $pdf->SetFont('Arial','',10);

        $transaksi = $this->m_peminjaman->tampiljoin();
        echo "</thead>";
        echo "<tbody>"
        
        foreach ($transaksi as $row){
            echo "<tr>";
                echo "<td>".$row->tanggal_pinjam."</td>";
                echo "<td>".$row->tanggal_kembali."</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>"; 

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