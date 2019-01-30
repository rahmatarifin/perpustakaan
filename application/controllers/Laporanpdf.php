<?php
class Laporanpdf extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_peminjaman');
	}

	function index(){
		if(isset($_get['filter']) && !empty($_get['filter'])){
			$filter = $_get['filter'];
			if($filter == '1'){
				$tgl = $_get['tanggal'];

				$ket = 'Data Transaksi Tanggal '.date('d-m-Y', strtotime($tgl));

				$url_cetak = 'laporanpdf/cetak?filter=1&tahun='.$tgl;
				$transaksi = $this->m_peminjaman->view_by_date($tgl);
			}elseif ($filter == '2') {
				$bulan = $_get['bulan'];
				$tahun = $_get['tahun'];
				$nama_bulan = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
				$ket = 'Data Transaksi Bulan '.$nama_bulan[$bulan].' '.$tahun;
				$url_cetak = 'laporanpdf/cetak?filter=2&bulan='.$bulan.'$tahun'.$tahun;
				$transaksi = $this->m_peminjaman->view_by_month($bulan, $tahun);

			}else{
				$tahun = $_get['tahun'];

				$ket = 'Data Peminjaman Tahun '.$tahun;
				$url_cetak = 'laporanpdf/cetak?filter=3&tahun='.$tahun;
				$transaksi = $this->m_peminjaman->view_by_year($tahun);
			}
		}else{
			$ket = 'Semua Data Peminjaman';
			$url_cetak = 'laporanpdf/cetak';
			$transaksi = $this->m_peminjaman->tampiljoin();
		}

		$data['ket'] = $ket;
		$data['url_cetak'] = base_url($url_cetak);
		$data['transaksi'] = $transaksi;
		$data['option_tahun'] = $this->m_peminjaman->option_tahun();
		$this->load->view('laporan/l_transaksi', $data);
		/*
		$pdf = new FPDF('l', 'mm', 'A5');
		//membuat halaman baru
		$pdf->AddPage();
		//setting jenis fornt yang akan di gunakan
		$pdf->setFont('Arial', 'B', 16);
		//mencetak string
		$pdf->Cell(190, 7, 'SEKOLAH MENENGAH KEJURUSAN NASIONAL BANTUL');
		$pdf->setFont('Arial', 'B', 12);
		$pdf->Cell(190, 7, 'DAFTAR TRANSAKSI PERPUSTAKAAN');
		//memberikan space kebawah agar tidak terlalu rapat
		$pdf->Cell(10, 7,'', 0,1);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(20,6,'Kode Transaksi', 1,0);
		$pdf->Cell(85,6,'Tanggal Pinjam', 1,0);
		$pdf->Cell(27,6, 'Tanggal Kembali', 1,0);
		*/

	}

	function cetak(){
		f(isset($_GET['filter']) && ! empty($_GET['filter'])){ 
            $filter = $_GET['filter'];
            
            if($filter == '1'){ 
                $tgl = $_GET['tanggal'];
                
                $ket = 'Data Transaksi Tanggal '.date('d-m-y', strtotime($tgl));
                $transaksi = $this->TransaksiModel->view_by_date($tgl);
            }else if($filter == '2'){ 
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                
                $ket = 'Data Transaksi Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $transaksi = $this->TransaksiModel->view_by_month($bulan, $tahun);
            }else{ 
                $tahun = $_GET['tahun'];
                
                $ket = 'Data Transaksi Tahun '.$tahun;
                $transaksi = $this->TransaksiModel->view_by_year($tahun); 
            }
        }else{ 
            $ket = 'Semua Data Transaksi';
            $transaksi = $this->TransaksiModel->view_all(); 
        }
        
        $data['ket'] = $ket;
        $data['transaksi'] = $transaksi;
        
    ob_start();
    $this->load->view('print', $data);
    $html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en');
    $pdf->WriteHTML($html);
    $pdf->Output('Data Peminjaman.pdf', 'D');
	}
}