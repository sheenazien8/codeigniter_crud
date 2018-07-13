<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?= base_url('crud/store') ?>" method="POST">
		<label>Nama</label>
		<input type="text" name="nama">
		<br>
		<label>Status</label>
		<input type="text" name="status">
		<br>
		<label>Jurusan</label>
		<input type="text" name="jurusan">
		<br>
		<input type="submit" value="submit">
	</form>
</body>
</html>