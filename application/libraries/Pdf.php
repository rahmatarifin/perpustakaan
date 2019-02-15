<?php 
require_once dirname(__FILE__). '/tcpdf/tcpdf.php';
class Pdf extends TCPDF{
	function __construct(){
		//include_once APPPATH. '/third_party/fpdf/fpdf.php';

		parent::__construct();
	}

	 public function Header() {
        // Logo
        $image_file = K_PATH_IMAGES.'logo.jpg';
        $this->Image($image_file, 10, 10, 19, '', 'JPG', '', 'T', false, 500, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('helvetica', 'B', 12);
        // Title
        $this->Cell(0, 15, 'YAYASAN PENDIDIKAN VETERAN DUA JANUARI BANTUL', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        $this->LN(6);
        $this->Cell(0, 15, 'SMK NASIONAL BANTUL', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        $this->LN(6);
        $this->Cell(0, 15, 'TERAKREDITASI "A"', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        $this->LN(6);
        $this->Cell(0, 15, 'Alamat Jalan Jenderal Sudirman No. 25 Bantul 55711 Telp/Fax : (0274) 6469107', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }
}
?>