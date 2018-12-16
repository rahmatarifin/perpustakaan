<div>
	<?php echo form_open('kategori/add/'); ?>
	<pre>
		<div>
			<label>ID</label>
			<input type="text" name="idkategori" placeholder="ID Kategori">
		</div>
		<div>
			<label>Kategori</label>
			<input type="text" name="kategori" placeholder="Kategori">
		</div>
		<div>
			<input type="submit" value="Simpan">
		</div>
	</pre>
	<?php form_close(); ?>
</div>