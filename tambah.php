<?php 
require 'function.php';

// cek apakah tombol submit sudah pernah di tekan atu belum
if(isset($_POST["submit"])) {
	if(tambah($_POST) > 0) {
		echo "
			<script>
			alert('data berhasil ditambahkan');
			document.location.href = 'siswa.php'
			</script>
			";
	}else {
		echo "
			<script>
			alert('data gagal ditambahkan');
			document.location.href = 'siswa.php'
			</script>
			";
	}


}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>tambah siswa</title>
</head>
<body>
	<h2>Tambah Data Siswa</h2>

	<form action="" method="post">
		<ul>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="nis">NIS : </label>
				<input type="text" name="nis" id="nis" required>
			</li>
			<li>
				<label for="ttl">TTL : </label>
				<input type="text" name="ttl" id="ttl" required>
			</li>
			<li>
				<label for="alamat">Alamat : </label>
				<input type="text" name="alamat" id="alamat" required>
			</li>
			<li>
				<label for="gambar">gambar : </label>
				<input type="text" name="gambar" id="gambar" required>
			</li>
			<br>
			<li>
				<button type="submit" name="submit">Tambah Data</button>
			</li>
		</ul>
		

	</form>

</body>
</html>