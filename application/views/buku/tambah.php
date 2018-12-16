<div>
	<?php echo form_open('buku_/tambah/'); ?>
	<pre>
		<div>
			<label>Kode Buku</label>
			<input type="text" name="kode_buku" placeholder="Kode Buku">
		</div>
		<div>
			<label>Judul</label>
			<input type="text" name="judul" placeholder="Judul Buku">
		</div>
		<div>
			<label>Pengarang</label>
			<input type="text" name="pengarang" placeholder="Pengarang Buku">
		</div>
		<div>
			<label>Description</label>
			<input type="text" name="description" placeholder="Deskripsi">
		</div>
		<div>
			<input type="submit" value="simpan">
		</div>
	</pre>
	<?php form_close(); ?>
</div>