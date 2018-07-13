<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php foreach ($content->result() as $value): ?>
		<form action="<?= base_url('crud/update_store/').$value->id ?>" method="POST">
				<label>Nama</label>
				<input type="text" name="nama" value="<?= $value->nama ?>">
				<br>
				<label>Status</label>
				<input type="text" name="status" value="<?= $value->status ?>">
				<br>
				<label>Jurusan</label>
				<input type="text" name="jurusan" value="<?= $value->jurusan ?>">
				<br>
				<input type="submit" value="submit">
		</form>
	<?php endforeach ?>
</body>
</html>