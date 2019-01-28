<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<script type="text/javascript">
	#kop{
		align: center;

	}
	</script>
</head>
<body>
	<div>
		<p>Tanggal Cetak : <?php echo date_format(date_create(), 'd-m-Y G:i:s'); ?></p>
		<div id="header" align="left">
			<img  width="10%" height="10%" src="<?php echo base_url(); ?>assets/images/logo.gif">
		</div>
		<div id="kop" align="center">
			<p>SISTEM ADMINISTRASI PERPUSTAKAAN SEKOLAH MENENGAH NASIONAL BANTUL</p>
			<P>TERAKREDITASI A</P>
			<p>Alamat : Jalan Jendral Sudirman No. 25 Bantul 55711 Telp/fax : (0274) 6469107</p>
			<p>Email : smk_nasional_btl@yahoo.co.id</p>
		</div>
		<div align="center">
			-------------------------------------------------------------------------------------------------------------------------------------------

			<br>

			Data Buku
		</div>
		<div>
		<table border="1" width="100%">
			<thead>
			<tr>
				<th width="30">Kode Buku</th>
				<th >Judul</th>
				<th>Pengarang</th>
				<th>Deskripsi</th>
				<th width="10">Kategori</th>
			</tr>
			</thead>
			<tbody>
				<?php foreach ($data as $buku) {?>
					<tr>
						<td><?php echo $buku->kode_buku; ?></td>
						<td><?php echo $buku->judul; ?></td>
						<td><?php echo $buku->pengarang; ?></td>
						<td><?php echo $buku->description; ?></td>
						<td><?php echo $buku->kategori; ?></td>
					</tr>

				<?php } ?>
			</tbody>
		</table>
	</div>
	<div>
		<footer>Tanggal cetak : <?php echo date_format(date_create(), 'd-m-Y G:i:s'); ?></footer>
	</div>
	</div>
</body>
</html>