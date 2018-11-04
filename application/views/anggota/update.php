<!DOCTYPE html>
<html>
<head>
	<title>update anggota</title>
</head>
<body>
	<?php foreach($data as $row): ?>
		<?php echo form_open('anggota/update'); ?>
		<h1>Edit Data</h1>
		<table>
			<tr>
				<td>NIS</td>
				<td><input type="text" name="nis" value="<?php echo $row->nis; ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $row->nama; ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $row->alamat; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Update"></td>
			</tr>
		</table>
	<?php endforeach; ?>
	<?php form_close(); ?>

</body>
</html>