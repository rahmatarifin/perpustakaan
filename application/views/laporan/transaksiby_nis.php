<?php
class transaksiby_nis extends TCPDF{
	

}
    $tgl_sekarang = new date('d-m-Y G:i:s');
    $pdf = new Pdf('p', 'mm', 'A4', true, 'utf-8', false);
	$pdf->SetTitle('Daftar Transaksi');
	$pdf->SetHeaderMargin(30);
    $pdf->SetTopMargin(20);
    $pdf->setFooterMargin(20);
    $pdf->SetAutoPageBreak(true);
    $pdf->SetAuthor('.$username.');
    $pdf->SetDisplayMode('real', 'default');
    $pdf->AddPage();
    //$html='<h8>'..'</h8>';
    $html='

    <h3>Sekolah Menengah Kejuruan Nasional Bantul</h3>
    <h3>Sistem administrasi Perpustakaan </h3>
        	<h3>Daftar Transaksi</h3>
                    <table border="1">
                        <tr>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>NIS</th>
                            <th>Nama Anggota</th>
                            <th>Kode Buku</th>
                            <th>Judul</th>
                            <th>Denda</th>
                            <th>Status</th>
                        </tr>';
            foreach ($join as $transaksi) 
                {
                    
                    $html.='<tr bgcolor="#ffffff">
                            <td>'.$transaksi->tanggal_pinjam.'</td>
                            <td>'.$transaksi->tanggal_kembali.'</td>
                            <td>'.$transaksi->nis.'</td>
                            <td>'.$transaksi->nama_anggota.'</td>
                            <td>'.$transaksi->kode_buku.'</td>
                            <td>'.$transaksi->judul.'</td>
                            <td>'.$transaksi->denda.'</td>
                            <td>'.$transaksi->status.'</td>
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('Laporan transaksi.pdf', 'I');
?>