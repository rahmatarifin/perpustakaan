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
    	<h3 align="center">Sekolah Menengah Kejuruan Nasional Bantul</h3>
           	<h4 align="center">Sistem Administrasi Perpustakaan </h3>
           	<h4 align="center">Daftar Anggota</h3>
                <table border="1">
                        <tr>
                            <th>NIS</th>
                            <th>Nama Anggota</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>

                        </tr>';
            foreach ($join as $anggota) 
                {
                    
                    $html.='<tr bgcolor="#ffffff">
                            <td>'.$anggota->nis.'</td>
                            <td>'.$anggota->nama_anggota.'</td>
                            <td>'.$anggota->alamat.'</td>
                            <td>'.$anggota->jk.'</td>
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('Laporan Anggota.pdf', 'I');
?>