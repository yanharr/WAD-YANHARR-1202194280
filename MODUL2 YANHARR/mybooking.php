<?php
    if(isset($_POST["submit"])) {
        $name = "Yanharr_1202194280";
        $gedung = $_POST["tipe-gedung"];
        if ($gedung == "Nusantara Hall") {
            $harga = 2000;
        } elseif ($gedung == "Garuda Hall") {
            $harga = 1000;
        } elseif ($gedung == "Gedung serba guna") {
            $harga = 5000;
        }

        $bookid = rand();
        $phone = $_POST["nomor-hp"];
        $duration = $_POST["duration"];
        $date = $_POST["eventdate"];
        $time = $_POST["starttime"];
        $checkin = date('Y-m-d H:i:s',strtotime("$date $time"));
        $checkout = date('Y-m-d H:i:s',strtotime($duration . " " . "hours", strtotime($checkin)));
        
        $hargaservice = 0;
        if (empty($_POST["services"])) {
            $hargaservice = 0;
        }
        else{
            $services = $_POST["services"];
            foreach ($services as $value) {
                if ($value == "Catering") {
                    $hargaservice += 700;
                } elseif ($value == "Decoration") {
                    $hargaservice += 450;
                } elseif ($value == "Sound System") {
                    $hargaservice += 250;
                }
            }
        }
        $totalharga = ($harga*$duration) + $hargaservice;    
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

    <section id="MyBooking"> <h4 class="my-2 text-center">Thank You <?=$name?> for reserving</h4>
        <p class="py-2 bg-dark text-white text-center">Please double check your reservation!</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Checkin</th>
                    <th scope="col">Checkout</th>
                    <th scope="col">Building</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Service</th>
                    <th scope="col">Total harga</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th><?=$bookid?></th>
                    <td><?=$name?></td>
                    <td><?=$checkin?></td>
                    <td><?=$checkout?></td>
                    <td><?=$gedung?></td>
                    <td><?=$phone?></td>
                    <td>
                        <ul>
                            <?php
                            if (empty($_POST["services"])) {
                                echo "No services";
                            }
                            else {
                                foreach ($services as $value) {
                                    echo "<li> $value </li>";
                                }
                            }
                            ?>
                        </ul>
                    </td>
                    <td>$<?=$totalharga?></td>
                </tr>
            </tbody>
        </table>
    </section>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
      <div class="container-fluid bg-light text-dark">
        <h1 style="text-align: center; font-size: medium;">Dibuat oleh Yanharr Alfiazi_1202194280</h1>
      </div>
    </footer>  
</body>
 
