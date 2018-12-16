<div>
<a href="<?php base_url(); ?>kategori/add_kategori/">Tambah Kategori</a>
<table width="40%" border="1">
	<thead>
		<tr>
			<td>ID</td>
			<td>Kategori</td>
			<td colspan="2">aksi</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php foreach($data as $kategori): ?>
				<td><?php echo $kategori->id_kategori; ?></td>
				<td><?php echo $kategori->kategori; ?></td>
				<td><a href="<?php base_url();?>kategori/edit/<?php echo $kategori->id_kategori; ?>">Edit</a></td>
				<td><a href="<?php base_url(); ?>kategori/hapus/<?php echo $kategori->id_kategori; ?>">Hapus</a></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</div>