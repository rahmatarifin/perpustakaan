<table border="1" width="50%">
	<tr align="center">
		<td>Kode Buku</td>
		<td>Judul</td>
		<td>Pengarang</td>
		<td>Klarifikasi</td>
	</tr>
	<tr>
		<?php foreach($data as $row): ?>
		<td>
			<img src="<?php echo base_url('assets/image/'.$row->image); ?>" height="100px" width="100px" >
		</td>
		<td><?php echo $row->kode_buku; ?></td>
		<td><?php echo $row->judul; ?></td>
		<td><?php echo $row->pengarang; ?></td>
		<td><?php echo $row->klarifikasi; ?></td>
		<?php endforeach; ?>
	</tr>
</table>
