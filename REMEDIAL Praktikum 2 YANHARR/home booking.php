<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body style="background:grey;">
    <?php
    $gedung = [
      "gedung1" => "Camp Nou",
      "gedung2" => "Santiago Bernabeu",
      "gedung3" => "Old Trafford",
    ];
    $harga = [
      "harga1" => "7460",
      "harga2" => "8000",
      "harga3" => "6310",
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
              <a class="nav-link active" aria-current="page" href="home booking.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dibooking.php">Booking</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      <p style="text-align: center; font-size: x-large; font-weight: bold; font-family: Arial, Helvetica, sans-serif;">WELCOME TO STADIUM BOOKING TICKET</p>
      <header>
        <div class="container bg-dark text-white" style="text-align:center; margin-bottom: 10px;">
        Get your seat ticket now!
      </header>
      
      <div style = "margin-top: 20px; font-weight: bold;" class="container" id="jt">
        <div class="row">

          <div class="col-md-4">
            <div class="card" style="">
              <img src="https://www.fcbarcelona.com/photo-resources/2021/08/09/276ad270-e5c6-453d-8d9f-212417ad7cb3/Camp-Nou-3.jpg?width=1200&height=750" class="card-img-bottom img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $gedung["gedung1"] ?></h5>
                <p class="card-text"><?= $harga["harga1"]?> Euro</p>
                99354 Capacity
              </div>
                <ul class="list-group list-group-flush" style="text-align: center;">
                  <li class="list-group-item" style="color: green;">Free Parking</li>
                  <li class="list-group-item" style="color: red;">No Rooftop</li>
                  <li class="list-group-item" style="color: green;">Cleaning Service</li>
                  <li class="list-group-item" style="color: green;">Covid-19 Health Protocol</li>
                </ul>
              <div class="card-body text-center">
                <form action="dibooking.php" method="POST">
                  <button type="submit" name="book-now" class="btn btn-primary" value="Camp Nou">Book Now</button>
                </form>  
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="card" style="" >
              <img src="https://www.ligaolahraga.com/storage/images/news/2020/03/27/santiago-bernabeu-disulap-jadi-pusat-penyimpanan-alat-medis.jpeg" class="card-img-top img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $gedung["gedung2"] ?></h5>
                <p class="card-text"><?= $harga["harga2"] ?> Euro</p>
                81044 Capacity
              </div>
                <ul class="list-group list-group-flush" style="text-align: center;">
                  <li class="list-group-item" style="color: green;">Free Parking</li>
                  <li class="list-group-item" style="color: green;">Rooftop</li>
                  <li class="list-group-item" style="color: red;">No Cleaning Service</li>
                  <li class="list-group-item" style="color: green;">Covid-19 Health Protocol</li>
                </ul>
              <div class="card-body text-center">
                <form action="dibooking.php" method="POST">
                  <button type="submit" name="book-now" class="btn btn-primary" value="Santiago Bernabeu">Book Now</button>
                </form>
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="card" style="" >
              <img src="https://asset.kompas.com/crops/iZwEN0w0MAJ2hI_wMdq21p7OVPU=/204x127:1319x870/750x500/data/photo/2019/10/09/5d9db542bea34.png" class="card-img-top img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $gedung["gedung3"] ?></h5>
                <p class="card-text"><?= $harga["harga3"] ?> Euro</p>
                76000 Capacity
                </div>
                <ul class="list-group list-group-flush" style="text-align: center;">
                  <li class="list-group-item" style="color: green;">Free Parking</li>
                  <li class="list-group-item" style="color: green ;">Rooftop</li>
                  <li class="list-group-item" style="color: green;">Cleaning Service</li>
                  <li class="list-group-item" style="color: green;">Covid-19 Health Protocol</li>
                </ul>  
              <div class="card-body text-center">
                <form action="dibooking.php" method="POST">
                  <button type="submit" name="book-now" class="btn btn-primary" value="Old Trafford">Book Now</button>
                </form>
              </div>
            </div>          
          </div>    
        </div>
      </div>
          
    <br><br><br><br><br><br><br><br><br><br><br><br>



    </body>
    <footer style="background:grey;" class="footer nt-auto text-center p-3">
        <p>Created by : Yanharr_1202194280</p>
    </footer>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>