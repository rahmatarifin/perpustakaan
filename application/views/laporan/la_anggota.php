<?php
    $pdf = new Pdf('p', 'mm', 'A4', true, 'utf-8', false);
    $pdf->SetTitle('Daftar Anggota');
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetTopMargin(20);
    $pdf->setFooterMargin(20);
    $pdf->SetAutoPageBreak(true);
    $pdf->SetAuthor('.$username.');
    $pdf->SetDisplayMode('real', 'default');
    
    //$html='<h8>'..'</h8>';

    $pdf->SetHeaderData(PDF_HEADER_LOGO,PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.'THX', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

// set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);


// set auto page breaks
   // $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
        require_once(dirname(__FILE__).'/lang/eng.php');

        $pdf->setLanguageArray($l);
    }

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 12, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

    $html='
    	<br>
        <br>
           	<h4>Daftar Anggota</h3>
                <table border="1">
                        <tr>
                            <th align="center">NIS</th>
                            <th align="center">Nama Anggota</th>
                            <th align="center">Alamat</th>
                            <th align="center">Jenis Kelamin</th>
                            <th align="center">Tempat Lahir</th>
                            <th align="center">Tanggal Lahir</th>

                        </tr>';
            foreach ($join as $anggota) 
                {
                    
                    $html.='<tr bgcolor="#ffffff">
                            <td align="center">'.$anggota->nis.'</td>
                            <td align="center">'.$anggota->nama_anggota.'</td>
                            <td align="center">'.$anggota->alamat.'</td>
                            <td align="center">'.$anggota->jk.'</td>
                            <td align="center">'.$anggota->tempat_lahir.'</td>
                            <td align="center">'.$anggota->tanggal_lahir.'</td>
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('Laporan Anggota.pdf', 'I');
?>