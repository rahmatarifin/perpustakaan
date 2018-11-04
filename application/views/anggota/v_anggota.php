/*<?php echo form_open('anggota/tambah');?>
<pre>
	<h1>Tambah Anggota</h1>
	NIM 	: <input type="text" name="nis" placeholder="nis" required autofocus /> </br>
	Nama    : <input type="text" name="nama" placeholder="nama" required>
	Alamat  : <input type="text" name="alamat" placeholder="alamat" required>

	<input type="submit" value="Simpan">
</pre>
<?php form_close(); ?>
*/
	<h1>==================================================</h1>
	<table width="40%" border="1">

		<tr>
			<td>NIS</td>
			<td>nama</td>
			<td>Alamat</td>
			<td colspan="2">Aksi</td>
		</tr>
		<tr>
			<?php foreach ($data as $row): ?>
				<td><?php echo $row->nis; ?></td>
				<td><?php echo $row->nama; ?></td>
				<td><?php echo $row->alamat; ?></td>
				<td><a href="<?php base_url(); ?>edit/<?php echo $row->nis;?>">Edit</a></td>
				<td><a href="<?php base_url(); ?>hapus/<?php echo $row->nis;?>">Hapus</a></td>
		</tr>
	<?php endforeach; ?>
	</table>
</div>