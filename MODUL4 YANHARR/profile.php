<?php

    require 'function.php';

    

    $result = mysqli_query($connect, "SELECT * FROM user WHERE email = '$email'");




?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Profile</title>
  </head>
  <body style="background-color: #fff8e6;">
    <nav class="navbar navbar-light" style="background-color:#8db7f4;">
    <div class="container-fluid">
        <a class="navbar-brand" style="font-weight:bold; margin-left:300px">EAD Travel</a>
        <form class="d-flex">
            <a class="navbar-brand" style="font-size:15px" href="">Register</a>
            <a class="navbar-brand" style="font-size:15px; margin-right:300px" href="">Login</a>
        </form>
    </div>
    </nav>

    <br>
    
    <div class="container bg-white">
        <form>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control-plaintext" id="staticEmail" value="<?= $email ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="=nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" value="<?= $nama ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="nohp" class="col-sm-2 col-form-label">Nomor Handphone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nohp" value="<?= $nohp ?>">
                </div>
            </div>
            <hr class="bg-grey" style="width:100%;text-align:left;margin-left:auto; height:1px">
            <div class="form-group row">
                <label for="katasandi" class="col-sm-2 col-form-label">Kata sandi</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" value="<?= $katasandi ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Konfirmasi Kata sandi</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" value="<?= $kkatasandi ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Warna Navbar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-primary text-center">Submit</button>
            <button type="submit" class="btn btn-warning text-center">Cancel</button>
            </div>
        </form>
        
    </div>
    </body>
    <footer>
        <div class="text-center p-4" style="background-color:#8db7f4; margin-top: 160px;">
        &copy;2021 Copyright <a href="">Yanharr_1202194280</a> 
        </div>
    </footer> 
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>