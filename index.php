 <?php
require 'function.php';
$siswa = query("SELECT * FROM siswa");


?>

<!DOCTYPE html>
<html>
<head>
	<title>siswa</title>
</head>
<body>
	<h2>DAFTAR SISWA</h2>
	<br>
	<a href="tambah.php">Tambah Data Siswa</a>
	<br> <br> <br>

	<table border="1" cellspacing="0">
		<tr>
			<th>No</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>NIS</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>

		<?php $i= 1; ?>
		<?php foreach($siswa as $swa) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td><a href="ubah.php? id=<?= $swa["id"];?>">Ubah</a> |	
				<a href="hapus.php? id=<?= $swa["id"];?>" onclick= "return confirm('Apakah anda yakin ingin menghapus?')">Hapus</a></td>
			<td><img src="img/<?= $swa["gambar"]; ?>"></td>
			<td><?= $swa["nama"]; ?></td>
			<td><?= $swa["nis"]; ?></td>
			<td><?= $swa["email"]; ?></td>
			<td><?= $swa["jurusan"]; ?></td>
			
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</table>

</body>
</html>

