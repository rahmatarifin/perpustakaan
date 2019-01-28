<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pdf</title>

</head>
<body>

<form method="">
	
</form>
	<table border="1">
		<thead>
			<tr>
				<td>Kode Transaksi</td>
				<td>Tanggal Pinjam</td>
				<td>Tanggal Kembali</td>
				<td>NIS</td>
				<td>Nama Anggota</td>
				<td>Kode Buku</td>
				<td>Judul Buku</td>
				<td>Status</td>
				<td>Denda</td>
			</tr>
		</thead>
		<tbody>
			
			<tr>
                      <?php foreach($join as $pinjam): ?>
                        
                        <td><?php echo $pinjam->tanggal_pinjam; ?></td>
                        <td><?php echo $pinjam->tanggal_kembali; ?></td>
                        <td><?php echo $pinjam->nis; ?></td>
                        <td><?php echo $pinjam->kode_buku; ?></td>
                        <td><?php echo $pinjam->nama_anggota; ?></td>
                        <td><?php echo $pinjam->jk; ?></td>
                        <td><?php echo $pinjam->judul; ?></td>
                        <td><?php echo $pinjam->pengarang; ?></td>
                        <td><?php echo $pinjam->status ?></td>
                        <td>
                        	<?php
                        		$tanggal_pinjam = new datetime($pinjam->tanggal_pinjam);
                        		$tanggal_kembali = new datetime($pinjam->tanggal_kembali);
                        		$denda = $tanggal_kembali->diff($tanggal_pinjam)->format("%a");
                        		if($denda-7<=0){
                        			$denda = 0;
                        		}else{
                        			echo ($denda-7)*1000; 	
                        		}
                        		
                         ?></td>
           
                      </tr>
                    <?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>