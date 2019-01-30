<?php
	$pdf = new Pdf('p', 'mm', 'A4', true, 'utf-8', false);
	$pdf->SetTitle('Daftar Buku');
	$pdf->SetHeaderMargin(30);
    $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('.$username.');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage();
            $html='

            	<h3>Sekolah Menengah Kejuruan Nasional Bantul</h3>
            	<h3>Sistem administrasi Perpustakaan </h3>
            	<h3>Daftar Buku</h3>
                    <table border="1">
                        <tr>
                            <th>Kode Buku</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Deskripsi</th>
                        </tr>';
            foreach ($join as $buku) 
                {
                    
                    $html.='<tr bgcolor="#ffffff">
                            <td>'.$buku->kode_buku.'</td>
                            <td>'.$buku->judul.'</td>
                            <td>'.$buku->pengarang.'</td>
                            <td>'.$buku->description.'</td>
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('Laporan buku.pdf', 'I');
?>
