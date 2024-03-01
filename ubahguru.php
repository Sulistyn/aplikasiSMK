<?php 
require 'functionguru.php';

$id = $_GET["id"];

$gru = query("SELECT * FROM guru WHERE id=$id")[0];


// cek apakah tombol submit sudah pernah di tekan atu belum
if(isset($_POST["submit"])) {
	if(ubah($_POST) > 0) {
		echo "
			<script>
			alert('Data berhasil diubah');
			document.location.href = 'guru.php'
			</script>
			";
	}else {
		echo "
			<script>
			alert('Data gagal diubah');
			document.location.href = 'guru.php'
			</script>
			";
	}


}

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="admin.css">
     <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>Ubah Guru</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
      <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>SMK PUTRA GUNUNGHALU</b></a>
     
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <div class="icon ml-4">
            <h5>
                <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
                <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
                <i class="fas fa-sign-out-alt mr-3"data-toggle="tooltip" title="Sign Out"></i>
            </h5>
        </div>
      </div>
    </nav>

    <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
              <li class="nav-item">
                <a class="nav-link active text-white" href="dasboard.php"><i class="fas fa-tachometer-alt mr-2"></i>Dasboard</a><hr class="bg-secondary">
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="siswa.php"><i class="fas fa-user-graduate mr-2"></i>Daftar Siswa</a><hr class="bg-secondary">
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="guru.php"><i class="fas fa-chalkboard-teacher mr-2"></i>Daftar Guru</a><hr class="bg-secondary">
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="pegawai.php"><i class="fas fa-user-edit mr-2"></i>Daftar Pegawai</a><hr class="bg-secondary">
              </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="belajar.php"><i class="fas fa-calendar-alt mr-2"></i>Jadwal Belajar</a><hr class="bg-secondary">
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="nilai.php"><i class="fas fa-paper-plane mr-2"></i>Nilai Siswa</a><hr class="bg-secondary">
              </li>
            </ul>
        </div>
        <div class="col-md-10 p-5 pt-2">
            <h3><i class="fas fa-user-edit mr-2"></i>UBAH DATA GURU</h3><hr>
            
            <form action="" method="post">
            	<ul>
            		
						<input type="hidden" name="id" id="id" required value="<?=$gru["id"] ?>" >
					
					<li>
						<label for="nama">Nama Guru : </label>
						<input type="text" class="form-control" name="nama" id="nama" required value="<?=$gru["nama"] ?>" >
					</li>
					<li>
						<label for="nip">NIP : </label>
						<input type="text" class="form-control" name="nip" id="nip" required value="<?=$gru["nip"] ?>" >
					</li>
					<li>
						<label for="ttl">Tempat Tanggal Lahir : </label>
						<input type="text" class="form-control" name="ttl" id="ttl" required value="<?=$gru["ttl"] ?>" >
					</li>
					<li>
						<label for="alamat">Alamat : </label>
						<input type="text" class="form-control" name="alamat" id="alamat" required value="<?=$gru["alamat"] ?>" >
					</li>
					<li>
						<label for="mata_pelajaran">Mata Pelajaran : </label>
						<input type="text" class="form-control" name="mata_pelajaran" id="mata_pelajaran" required value="<?=$gru["mata_pelajaran"] ?>" >
					</li>
					<li>
						<label for="gambar">Gambar : </label>
						<input type="text" class="form-control" name="gambar" id="gambar" required value="<?=$gru["gambar"] ?>" >
					</li>
		
					<br>
						<button type="submit" name="submit">Ubah Data</button>
				</ul>
			</form>
            
</body>
</html>