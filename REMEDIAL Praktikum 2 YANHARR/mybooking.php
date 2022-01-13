<?php
    if(isset($_POST["submit"])) {
        $name = $_POST["name"];
        $gedung = $_POST["tipe-gedung"];
        if ($gedung == "Camp Nou") {
            $harga = 7460;
        } elseif ($gedung == "Santiago Bernabeu") {
            $harga = 8000;
        } elseif ($gedung == "Old Trafford") {
            $harga = 6310;
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
                } elseif ($value == "Souvenir") {
                    $hargaservice += 450;
                } elseif ($value == "Football") {
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

<body style="background:grey;">
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

    <section id="MyBooking"> <h4 class="my-2 text-center">Thank You <?=$name?> for Reserving</h4>
        <p class="py-2 bg-white text-dark text-center">Please double check your reservation!</p>
        <div class="container">
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
                    <tr style="background-color:silver;">
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
        </div>    
    </section>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer style="background:grey;" class="footer nt-auto text-center p-3">
        <p>Created by : Yanharr_1202194280</p>
    </footer>  
</body>
 
