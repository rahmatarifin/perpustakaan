<?php
	$pdf = new Pdf('p', 'mm', 'A4', true, 'utf-8', false);
	$pdf->SetTitle('Daftar Anggota');
	$pdf->SetHeaderMargin(30);
    $pdf->SetTopMargin(20);
    $pdf->setFooterMargin(20);
    $pdf->SetAutoPageBreak(true);
    $pdf->SetAuthor('.$username.');
    $pdf->SetDisplayMode('real', 'default');
    $pdf->AddPage();
    $html='
    	<br>
        <br>
           	<h4 align="center">Daftar Anggota</h3>
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
                            <td>'.$anggota->nis.'</td>
                            <td>'.$anggota->nama_anggota.'</td>
                            <td>'.$anggota->alamat.'</td>
                            <td>'.$anggota->jk.'</td>
                            <td>'.$anggota->tempat_lahir.'</td>
                            <td>'.$anggota->tanggal_lahir.'</td>
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('Laporan Anggota.pdf', 'I');
?>