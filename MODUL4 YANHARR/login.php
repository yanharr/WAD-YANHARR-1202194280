<?php

require 'function.php';

  if( isset($_POST["login"])) {

    $email = $_POST["email"];
    $katasandi = $_POST["katasandi"];

    $result = mysqli_query($connect, "SELECT * FROM user WHERE email = '$email'");

    if ( mysqli_num_rows($result) === 1 ) {
      $row = mysqli_fetch_assoc($result);
      if ( password_verify($katasandi, $row["password"])){
        session_start();
        $_SESSION["login"] = true;  


        if(isset($_POST['rememberme'])) {
          setcookie("user_email",$_POST["email"], time()+ (60*60*24*5));
          setcookie("user_password",$_POST["katasandi"], time()+ (60*60*24*5));
        }
        header("Location: index.php");
        exit;
      }

    }

  } 
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
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
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      Registrasi Berhasil
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <div class="container bg-light" style="width: 25rem; margin-top:150px; box-shadow: 0px 0px 2px rgba(0, 0, 0, .);">
    <h1 class="text-center">Login</h1>
    <hr class="bg-grey" style="width:100%;text-align:left;margin-left:auto; height:1px">
      <div class="container">
        <form method="post" action="">
          <div class="form-group">
              <label for="nama">Email</label>
              <input type="nama" class="form-control" id="Nama" name="email" value="<?php if(isset($_COOKIE["user_email"])) { echo $_COOKIE["user_email"]; } ?>" reqired>
          </div>
          <div class="form-group">
              <label for="katasandi">Kata sandi</label>
              <input type="password" class="form-control" id="katasandi" name="katasandi"  value="<?php if(isset($_COOKIE["user_password"])) { echo $_COOKIE["user_password"]; } ?>">
          </div>
          <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="rememberme">
              <label class="form-check-label" for="flexCheckDefault">
                  Remember Me
              </label>
        </div>
          <br>
          <button type="submit" class="btn btn-primary" name="login" style="margin-left:135px">Submit</button>
          <br>
          <div class="form-group text-center">
              Anda belum punya akun? <a href="register.php">Register</a>          
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



