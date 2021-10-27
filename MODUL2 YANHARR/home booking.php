<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>
    <?php
    $gedung = [
      "gedung1" => "Nusantara Hall",
      "gedung2" => "Garuda Hall",
      "gedung3" => "Gedung serba guna",
    ];
    $harga = [
      "harga1" => "2000",
      "harga2" => "1000",
      "harga3" => "500",
    ]
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" style="text-align: center;">
          <ul class="navbar-nav mx-auto" >
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dibooking.php">Booking</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      <p style="text-align: center; font-size: x-large; font-weight: bold; font-family: Arial, Helvetica, sans-serif;">WELCOME TO ESD VENUE RESERVATION</p>
      <header>
        <div class="container bg-dark text-white" style="text-align:center; margin-bottom: 10px;">
            Find your best deal for your event, here!
      </header>
      
      <div style = "margin-top: 20px; font-weight: bold;" class="container" id="jt">
        <div class="row">

          <div class="col-md-4">
            <div class="card" style="width: 25rem;">
              <img src="https://s7d2.scene7.com/is/image/ritzcarlton/50557239-RUHRZ_2018_1702?$XlargeViewport100pct$" class="card-img-bottom img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $gedung["gedung1"] ?></h5>
                <p class="card-text">$<?= $harga["harga1"]?> / Hour</p>
                5000 Capacity
              </div>
                <ul class="list-group list-group-flush" style="text-align: center;">
                  <li class="list-group-item" style="color: green;">Free Parking</li>
                  <li class="list-group-item" style="color: green;">Full AC</li>
                  <li class="list-group-item" style="color: green;">Cleaning Service</li>
                  <li class="list-group-item" style="color: green;">Covid-19 Health Protocol</li>
                </ul>
              <div class="card-body text-center">
                <form action="dibooking.php" method="POST">
                  <button type="submit" name="book-now" class="btn btn-primary" value="Nusantara Hall">Book Now</button>
                </form>  
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="card" style="width: 25rem;" >
              <img src="https://alexandra.bridestory.com/image/upload/assets/garuda-wedding-SyYglZBDN.jpg" class="card-img-top img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $gedung["gedung2"] ?></h5>
                <p class="card-text">$<?= $harga["harga2"] ?> / Hour</p>
                2000 Capacity
              </div>
                <ul class="list-group list-group-flush" style="text-align: center;">
                  <li class="list-group-item" style="color: green;">Free Parking</li>
                  <li class="list-group-item" style="color: green;">Full AC</li>
                  <li class="list-group-item" style="color: red;">No Cleaning Service</li>
                  <li class="list-group-item" style="color: green;">Covid-19 Health Protocol</li>
                </ul>
              <div class="card-body text-center">
                <form action="dibooking.php" method="POST">
                  <button type="submit" name="book-now" class="btn btn-primary" value="Garuda Hall">Book Now</button>
                </form>
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="card" style="width: 25rem;" >
              <img src="https://weddingmarket.com/storage/images/artikelidea/9088269ed9bc8422e2e40679bc37c0da10d73580.webp" class="card-img-top img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $gedung["gedung3"] ?></h5>
                <p class="card-text">$<?= $harga["harga3"] ?> / Hour</p>
                500 Capacity
                </div>
                <ul class="list-group list-group-flush" style="text-align: center;">
                  <li class="list-group-item" style="color: red;">Free Parking</li>
                  <li class="list-group-item" style="color: red ;">Full AC</li>
                  <li class="list-group-item" style="color: red;">Cleaning Service</li>
                  <li class="list-group-item" style="color: green;">Covid-19 Health Protocol</li>
                </ul>  
              <div class="card-body text-center">
                <form action="dibooking.php" method="POST">
                  <button type="submit" name="book-now" class="btn btn-primary" value="Gedung serba guna">Book Now</button>
                </form>
              </div>
            </div>          
          </div>    
        </div>
      </div>
          
    <br><br><br><br><br><br><br><br><br><br><br><br>



    </body>

    <footer>
      <div class="container-fluid bg-light text-dark">
        <h1 style="text-align: center; font-size: medium;">Dibuat oleh Yanharr Alfiazi_1202194280</h1>
      </div>
    </footer> 



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>