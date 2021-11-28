<?php

require 'function.php';
if( isset($_POST['submit'])) {

  if ( registrasi($_POST) > 0 ) {
    echo "<script>
            alert('user baru berhasil ditambahkan!');
          </script>";
    header("Location: login.php");
    exit;      
  } else {
    echo mysqli_error($connect);
  }
}

?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body style="background-color: #fff8e6;">
    <nav class="navbar navbar-light" style="background-color:#8db7f4;">
    <div class="container-fluid">
        <a class="navbar-brand" style="font-weight:bold; margin-left:300px">EAD Travel</a>
        <form class="d-flex">
            <a class="navbar-brand" style="font-size:15px" href="register.php">Register</a>
            <a class="navbar-brand" style="font-size:15px; margin-right:300px" href="login.php">Login</a>
        </form>
    </div>
    </nav>

    <div class="container bg-light" style="width: 25rem; margin-top:150px; box-shadow: 0px 0px 2px rgba(0, 0, 0, .);">
    <h1 class="text-center">Register</h1>
    <hr class="bg-grey" style="width:100%;text-align:left;margin-left:auto; height:1px">
      <div class="container">
        <form method="post" action="">
          <div class="form-group">
              <label for="nama">Nama</label>
              <input type="nama" class="form-control" id="Nama" name="nama">
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email">
          </div>
          <div class="form-group">
              <label for="nohp">Nomor handphone</label>
              <input type="nohp" class="form-control" name="nohp" id="nohp">
          </div>
          <div class="form-group">
              <label for="katasandi">Kata Sandi</label>
              <input type="password" class="form-control" name="katasandi" id="katasandi">
          </div>
          <div class="form-group">
              <label for="kkatasandi">Konfirmasi Kata Sandi</label>
              <input type="password" class="form-control" name="kkatasandi" id="kkatasandi">
          </div>
          <br>
          <button type="submit" class="btn btn-primary" name="submit" style="margin-left:135px">Submit</button>
          <br>
          <div class="form-group text-center">
              Anda sudah punya akun? <a href="login.php">Login</a>          
          </div>
          <br>       
        </form>
      </div>  
    </div>    
    </body>
    <footer>
        <div class="text-center p-4" style="background-color:#8db7f4; margin-top: 160px;">
        &copy;2021 Copyright <a href="">Yanharr_1202194280</a> 
        </div>
    </footer> 
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>