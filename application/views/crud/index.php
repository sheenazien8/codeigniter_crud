<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="<?= base_url('crud/add') ?>"> Tambah Data</a>
	<table border="2">
		<tr>
			<td>ID</td>
			<td>Nama</td>
			<td>Status</td>
			<td>Jurusan</td>
			<td>Action</td>
		</tr>
		<?php foreach ($content->result() as $key): ?>	
			<tr>
				<td><?= $key->id ?></td>
				<td><?= $key->nama ?></td>
				<td><?= $key->status ?></td>
				<td><?= $key->jurusan ?></td>
				<td><a href="<?= base_url('crud/delete/').$key->id ?>">Del</a>
					<a href="<?= base_url('crud/update/').$key->id ?>">Upd</a>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>