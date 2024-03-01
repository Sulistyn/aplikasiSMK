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

    <title>Dasboard</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>SMK PUTRA GUNUNGHALU</b></a>
     
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <div class="icon ml-4">
            <h5>
                <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
                <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
                <a href="logout.php"><i class="fas fa-sign-out-alt mr-3"data-toggle="tooltip" title="Sign Out"></i></a>
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
            <h3><i class="fas fa-tachometer-alt mr-2"></i>DASHBOARD</h3><hr>

            <div class="row text-white">
                <div class="card bg-info ml-3" style="width: 18rem;">
                  <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-user-graduate mr-2"></i>  
                    </div>
                    <h5 class="card-title">JUMLAH SISWA</h5>
                    <div class="display-4">481</div>
                    <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
                  </div>
                </div>

                <div class="card bg-success ml-5" style="width: 18rem;">
                  <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-chalkboard-teacher mr-2"></i> 
                    </div>
                    <h5 class="card-title">JUMLAH GURU</h5>
                    <div class="display-4">25</div>
                    <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
                  </div>
                </div>    

                <div class="card bg-danger ml-5" style="width: 18rem;">
                  <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-user-edit mr-2"></i>  
                    </div>
                    <h5 class="card-title">JUMLAH PEGAWAI</h5>
                    <div class="display-4">2</div>
                    <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
                  </div>
                </div>

                <div class="row mt-4">
                    <div class="card ml-4 text-white text-center" style="width: 18rem;">
                      <div class="card-header bg-danger display-4 pt-4 pb-4">
                        <i class="fab fa-instagram"></i>
                      </div>
                      <div class="card-body text-dark">
                        <h5 class="card-title ">INSTAGRAM</h5>
                        <a href="#" class="btn btn-danger">Follow</a>
                      </div>
                    </div>

                     <div class="card ml-4 text-white text-center ml-5" style="width: 18rem;">
                      <div class="card-header bg-info display-4 pt-4 pb-4">
                        <i class="fab fa-facebook-f"></i>
                      </div>
                      <div class="card-body text-dark">
                        <h5 class="card-title ">FACEBOOK</h5>
                        <a href="#" class="btn btn-info">Like</a>
                      </div>
                    </div>

                     <div class="card ml-4 text-white text-center ml-5" style="width: 18rem;">
                      <div class="card-header bg-primary display-4 pt-4 pb-4">
                        <i class="fab fa-twitter"></i>
                      </div>
                      <div class="card-body text-dark">
                        <h5 class="card-title ">TWITTER</h5>
                        <a href="#" class="btn btn-primary">Follow</a>
                      </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="fontawesome/js/all.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>