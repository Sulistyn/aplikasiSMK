<?php 
require 'function.php';

if (isset($_POST["register"])){
	if (registrasi($_POST) > 0){
		echo "<script>
				alert('user baru berhasil ditambahkan');
				document.location.href = 'login.php';
			  </script>
		";
	}
	else{
		echo mysqli_error($conn);
	}

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>
	<h2>Halaman Registrasi</h2>
	<form action="" method="post">
	<ul>
		<li><label for="username">Username</label></li>
		<li><input type="text" name="username" id="username"></li>
		<li><label for="password">Password</label></li>
		<li><input type="text" name="password" id="password"></li>
		<li><label for="password2">Konfirmasi Password</label></li>
		<li><input type="password" name="password2" id="password2"></li>
		<br>
		<li><button type="submit" name="register">Register</button></li>
			
		
	</ul>
	</form>
</body>
</html>