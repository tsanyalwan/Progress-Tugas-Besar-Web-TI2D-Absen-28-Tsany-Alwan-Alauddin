<?php
    require 'function.php';

       if(isset($_POST['registrasi']))
       {
           if(registrasi($_POST)>0)
           {
               header("Location:login.php");
               echo "
                    <style>
                        alert('user berhasil ditambahkan');
                    </style>
               ";
           }else{
               echo mysqli_error($conn);
           }
       }
    
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <header>
      <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="#page-top">AIR LINES</a><a style="color:deepskyblue">International Travel</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#about">Book & Trip</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#projects">Discover</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#projects">Flight Schedule</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-primary" href="Login/login.html">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#signup"></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  </header>

    <!-- Header with Background Image -->
    <header class="business-header">
      <div class="container">
        <div class="row">
          <div class="col-sm-20" >
            <h1 class="display-3 text-left text-white mt-2" text-align="center "img="E:\POLINEMA\SMT 3\Desain dan Pemrograman Web\TUBES\img\bg_img2.jpg">Registration Page</h1>
          </div>
        </div>
      </div>
    </header>

    <!-- Page Content -->
    <hr>
    <form action="" method="POST">
        <h1>Data Diri</h1>
       <div class="col-sm-5">
            <label for="inputNama">Nama Lengkap</label><br>
            <small>*nama harus sesuai dengan nama di kartu identitas</small>
            <input type="text" class="form-control" name="namaDepan" placeholder="Nama Depan">
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="namaBelakang" placeholder="Belakang Nama">
        </div><br>
        <div class="col-sm-5">
            <label for="inputAgama">Agama</label>
            <select class="form-control" name="agama"placeholder="Agama">
              <option></option>
              <option value="islam">Islam</option>
              <option value="Protestan">Protestan</option>
              <option value="Hindu">Hindu</option>
              <option value="Budha">Budha</option>
              <option value="Katolik">Katolik</option>
              <option value="Kong Hu Cu">Kong Hu Cu</option>
              <option value="lainnya">Lainnya</option>
            </select><br>
        </div>
         <div class="col-sm-5">
          <label for="inputLahir">Tanggal Lahir</label>
          <input type="date" class="form-control" id="tglLahir" name="tglLahir" placeholder="Tanggal Lahir">
        </div><br>
        <div class="col-sm-5">
            <label for="innputKebangsaan">Kebangsaan</label>
            <input type="text" class="form-control" id="kebangsaan" name="kebangsaan" placeholder="Kebangsaan">
        </div><br>
        <div class="col-sm-5">
            <label for="inputIdentitas">Kartu Identitas</label>
            <input type="text" class="form-control" id="identitas" name="identitas" placeholder="Identitas">
        </div><br>
        <div class="col-sm-5">
            <small>*untuk penerbangan non-domestik</small><br>
            <label for="inputPaspor">No Paspor</label>
            <input type="text" class="form-control" id="noPaspor" name="noPaspor" placeholder="No Paspor">
        </div><br>  
        <div class="col-sm-5">
            <label for="inputNegPaspor">Negara Paspor</label>
            <input type="text" class="form-control" id="negaraPaspor"  name="negaraPaspor" placeholder="Negara Paspor">
        </div><br>
        <div class="col-sm-5">
            <label for="inputTglKad">Tanggal Kadaluwarsa</label>
            <input type="date" class="form-control" id="tglKadaluwarsa" name="tglKadaluwarsa" placeholder="Tanggal Kadaluwarsa">
        </div><br>

        <h1>Informasi Kontak</h1>
        <div class="col-sm-5">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div><br>
        <div class="col-sm-5">
            <label for="inputHp">No HP</label>
            <input type="text" class="form-control" id="noHp" name="noHp" placeholder="noHP">
        </div><br> 
        <div class="col-sm-5">
            <label for="inputAlamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
        </div><br>
        <div class="col-sm-5">
            <label for="inputNegara">Negara</label>
            <input type="text" class="form-control" id="negara" name="negara" placeholder="Negara">
        </div><br>
        <div class="col-sm-5">
            <label for="inputProvinsi">Provinsi</label>
            <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi">
        </div><br>
        <div class="col-sm-5">
            <label for="inputKota">Kota</label>
            <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota">
        </div><br>
        <div class="col-sm-5">
            <label for="inputKodePos">Kode Pos</label>
            <input type="text" class="form-control" id="kodePos" name="kodePos" placeholder="Kode Pos">
        </div><br>

        <h1>Pendaftaran</h1>
        <h3>Buat ID Anda</h3>
        <div class="col-sm-5">
            <label for="inputUsername">Nama Pengguna</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Nama Pengguna">
        </div><br>
        <div class="col-sm-5">
            <label for="inputPassword1">Sandi</label>
            <input type="password" class="form-control" id="password1" name="password1" placeholder="Sandi">
        </div><br>
        <div class="col-sm-5">
            <label for="inputPassword2">Konfirmasi Sandi</label>
            <input type="password" class="form-control" id="password2" name="password2" placeholder="Konfirmasi Sandi">
        </div><br>
        <button type="submit" name="registrasi" class="btn btn-primary">Registrasi</button>
        <div class="col-sm-5">
        </div><br>
    </form>    

    <form action="" method="post">
    </form>
    <!-- Footer -->
    <footer class="py-7 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
