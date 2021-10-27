<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>



<body>
    <?php
    if(isset($_POST["Checkout"])) {
        $name = "Yanharr_1202194280";
        $Gedung = $_POST["tipe-gedung"];
        if ($gedung == "Nusantara Hall") {
            $harga = 2000;
        } elseif ($gedung == "Garuda Hall") {
            $harga = 1000;
        } elseif ($gedung == "Gedung serba guna") {
            $harga = 500;
        }

        $bookid = rand();
        $phone = $_POST["Nohandphone"];
        $duration = $_POST["durasi"];
        $date = $_POST["tanggal acara"];
        $time = $_POST["waktu mulai"];
        $checkin = date( strtotime("$date $time"));
        $checkout = date(strtotime($duration . " " . "hours", strtotime($checkin)));
        $services = $_POST["services"];
        $hargaservice = 0;
        foreach ($services as $value) {
            if ($value == "Catering") {
                $hargaservice += 700;
            } elseif ($value == "Decoration") {
                $hargaservice += 450;
            } elseif ($value == "Sound System") {
                $hargaservice += 250;
            }
        }
        $totalharga = ($harga*$duration) + $hargaservice;
    }
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

    <section id="MyBooking">
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

                    </td>
                    <td>$<?=$totalharga?></td>
                </tr>
            </tbody>

        </table>
    </section>
</body>    
