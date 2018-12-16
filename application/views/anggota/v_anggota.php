<div>
<a href="<?php base_url(); ?>tambahanggota/">Tambah Anggota</a>
	<table width="40%" border="1">
	<thead>
		<tr>
			<td>NIS</td>
			<td>nama</td>
			<td>Alamat</td>
			<td colspan="2">Aksi</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php foreach ($data as $anggota): ?>
				<td><?php echo $anggota->nis; ?></td>
				<td><?php echo $anggota->nama; ?></td>
				<td><?php echo $anggota->alamat; ?></td>
				<td><a href="<?php base_url();?>anggota/edit/<?php echo $anggota->nis; ?>">Edit</a></td>
				<td><a href="<?php base_url();?>anggota/hapus/<?php echo $anggota->nis;?>">Hapus</a></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
		
	</table>
</div>