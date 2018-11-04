<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo validation_errors(); ?>
	<?php echo form_open('anggota/tambah'); ?>
	<pre>
		<div>
			<label>NIS</label>
			<input type="text" name="nis" placeholder="Nomor Induk Siswa">
		</div>
		<div>
			<label>Nama</label>
			<input type="text" name="nama" placeholder="Nama Siswa">
		</div>
		<div>
			<label>Alamat</label>
			<input type="text" name="alamat" placeholder="Alamat tempat tinggal">
		</div>
		<div>
			<input type="submit" value="simpan">
		</div>
	</pre>
	<?php form_close(); ?>
</body>
</html>