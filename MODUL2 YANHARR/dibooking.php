<?php
    if (isset($_POST["book-now"])) {
      $data = $_POST["book-now"];
      if ($data == "Nusantara Hall") {
        $harga = 2000;
        $image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRW_yhMiknbpwSrVA8B_CvyyK9zpOh0OJpA6w&usqp=CAU";
      } elseif ($data == "Garuda Hall") {
        $harga = 1000;
        $image = "https://alexandra.bridestory.com/image/upload/assets/garuda-wedding-SyYglZBDN.jpg";
      } elseif ($data == "Gedung serba guna") {
        $harga = 5000;
        $image = "https://weddingmarket.com/storage/images/artikelidea/9088269ed9bc8422e2e40679bc37c0da10d73580.webp";
      }
    }
    else {
      $data ="choose";
      $image ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRW_yhMiknbpwSrVA8B_CvyyK9zpOh0OJpA6w&usqp=CAU";
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Booking</title>
  </head>

  <body>
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
    <header style="margin-top: 10px;">
    <h4 class="my-2 text-center">WELCOME TO ESD VENUE RESERVATION</h4>
      <div class="container bg-dark text-white" style="text-align:center; margin-bottom: 10px; font-family: Arial, Helvetica, sans-serif;">
        Receive your venue now!
    </header>

    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img src="<?= $image ?>" class="img-fluid" alt="gedung.img" style="margin-top: 90px;">
        </div>

        <div class="col-sm-6">
          <form action="mybooking.php" method="POST">
            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Name</label>
              <input type="name" class="form-control" id="Name" name="name" value="Yanharr_1202194280" readonly>
            </div>
            <div class="mb-3">
              <label for="exampleInputEventDate" class="form-label">Event Date</label>
              <input type="date" class="form-control" id="eventDate" name="eventdate">
            </div>
            <div class="mb-3">
                <label for="Start Time">Start Time</label>
                <input type="time" class="form-control" name="starttime">
            </div>
            <div class="mb-3">
              <label for="exampleInputDuration" class="form-label">Duration (Hours)</label>
              <input type="number" class="form-control" id="Duration" duration="Duration" name="duration">
            </div>

            <div class="mb-3">
              <label class="Building-type">Building Type</label>
              <select class="form-control" id="Building-type" default="a" name="tipe-gedung">
                <option>--choose--</option>
                <option <?php if ($data == "Nusantara hall") {echo "Selected";} ?> value="Nusantara Hall">Nusantara Hall</option>
                <option <?php if ($data == "Garuda Hall") {echo "Selected";} ?> value="Garuda Hall">Garuda Hall</option>
                <option <?php if ($data == "Gedung serba guna") {echo "Selected";} ?> value="Gedung serba guna">Gedung serba guna</option>
              </select>
            </div>

            

            <div class="mb-3">
              <label for="PhoneNumber" class="form-label">PhoneNumber</label>
              <input type="text" class="form-control" id="phoneNumber" name="nomor-hp" aria-describedby="phone">
            </div>
            <h>Add Service(s)</h>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="Catering" name="services[]" value="Catering">
              <label class="form-check-label" for="Catering" >Catering/ $700</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="Decoration" name="services[]"  value="Decoration">
              <label class="form-check-label" for="Decoration">Decoration/ $450</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="sound System" name="services[]" value="Sound System">
              <label class="form-check-label" for="soundSystem" >Sound System/ $250</label>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>

        </div>
      </div>
    </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

  <br><br><br><br><br><br><br><br><br>

  <footer>
    <div class="container-fluid bg-light text-dark">
      <h1 style="text-align: center; font-size: medium;">Dibuat oleh Yanharr Alfiazi_1202194280</h1>
    </div>
  </footer> 

</html>

