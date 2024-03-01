<?php 
require 'function.php';

if (isset($_POST["register"])){
  if (registrasi($_POST) > 0){
    echo "<script>
        alert('user baru berhasil ditambahkan');
        </script>
    ";
  }
  else{
    echo mysqli_error($conn);
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

    <title>Siswa</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
      <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>SMK PUTRA GUNUNGHALU</b></a>
     
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-danger my-2 my-sm-0" type="submit">Search</button>
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

    <div class="pt-5 mt-2">
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
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>

