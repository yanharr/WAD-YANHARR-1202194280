<?php
require 'function.php';

if( isset($_POST["tambah"])) {
    $tanggal = $_POST['tanggal'];

    $result = mysqli_query($connect, "INSERT INTO booking ('tanggal') VALUES ('$tanggal')");
    header("Location: bookings.php"); 
    exit;
}

?>


<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Index</title>
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
    
    <div class="container p-5" style="background-color:#97c6a6; height:10rem;">
        <h1 align="center" style="font-weight:700;">EAD Travel</h1>
    </div>

    <div class="container">
        <div class="card-group">
            <div class="card">
                <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2020/10/01/4237179691.jpg" width="600" height="247" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Raja Ampat,Papua</h5>
                    <p class="card-text">
                        Kepualaun Raja Ampat adalah kepulayan Indonesia di ujung barat laut Semenanjung Kepala Burung di papua Barat. Terduru daru ratusan pulau yang tertutup hutan, Raja Ampat dikenal dengan pantai dan terumbu karangnya yang kaya dengan kehidupan laut. Lukisan batu dan gua kuno berada di Pulau Misool, sedangkan cendrawasih merah hidup di Pulau Waugeo. Batanta dan Salawati adalah pulau-pulau utama lainnya di nusantara.

                    </p>
                </div>
                <div class="card-footer bg-white">
                    <small class="text"><b>Rp.7000.000</b></small>
                </div>
                <div class="card-footer text-center">
                    <form action="" method="GET">
                        <input type="text" name="" value="" hidden>
                        <input type="text" name="" value="https://www.asliindonesia.net/wp-content/uploads/2015/03/pantai-raja-ampat.jpg" hidden>

                        <div class="d-grid" style="margin-top:7px;">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Pesan Tiket</button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <label>Tanggal Perjalanan</label>
                                            <input type="date" name="tanggal"class="form-control" style="margin-bottom:8px;">
                                            <hr class="bg-grey" style="width:100%;text-align:left;margin-left:auto; height:1px">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" name="tambah">Tambahkan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <img src="https://wallpapersmug.com/download/1280x720/443061/volcano-mountains-nature.jpg" width="600" height="247" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Gunung Bromo, Malang</h5>
                    <p class="card-text">
                    Gunung Bromo adalah gunung berapi somma aktif dan bagian dari pegunungan Tengger, di Jawa Timur, Indonesia. Pada 2.329 meter itu bukan puncak tertinggi dari massif, tetapi yang paling terkenal. Kawasan ini merupakan salah satu destinasi wisata yang paling banyak dikunjungi di Jawa Timur, dan gunung berapi ini termasuk dalam Taman Nasional Bromo Tengger Semeru.
                    </p>
                </div>
                <div class="card-footer bg-white">
                    <small class="text"><b>Rp.2000.000</b></small>
                </div>
                <div class="card-footer text-center">
                    <form action="" method="GET">
                        <input type="text" name="" value="" hidden>
                        <input type="text" name="" value="https://www.asliindonesia.net/wp-content/uploads/2015/03/pantai-raja-ampat.jpg" hidden>

                        <div class="d-grid" style="margin-top:7px;">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Pesan Tiket</button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <label>Tanggal Perjalanan</label>
                                            <input type="date" name="tanggal"class="form-control" style="margin-bottom:8px;">
                                            <hr class="bg-grey" style="width:100%;text-align:left;margin-left:auto; height:1px">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" name="tambah">Tambahkan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <img src="https://www.selasar.com/wp-content/uploads/2020/06/Tanah-Lot-1.jpg" width="600" height="247" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Tanah Lot, Bali</h5>
                    <p class="card-text">
                    Tanah Lot adalah formasi batuan di lepas pantai pulau Bali, Indonesia. Ini adalah rumah bagi kuil ziarah Hindu kuno Pura Tanah Lot, ikon wisata dan budaya yang populer untuk fotografi. Di sini ada dua pura yang terletak di atas batu besar. Satu terletak di atas bongkahan batu dan satunya terletak di atas tebing mirip dengan Pura Uluwatu. Pura Tanah Lot ini merupakan bagian dari puda Dang Kahyangan.
                    </p>
                </div>
                <div class="card-footer bg-white">
                    <small class="text"><b>Rp.5000.000</b></small>
                </div>
                <div class="card-footer text-center">
                    <form action="" method="GET">
                        <input type="text" name="" value="" hidden>
                        <input type="text" name="" value="https://www.asliindonesia.net/wp-content/uploads/2015/03/pantai-raja-ampat.jpg" hidden>
                        
                        <div class="d-grid" style="margin-top:7px;">                        
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Pesan Tiket</button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <label>Tanggal Perjalanan</label>
                                            <input type="date" name="tanggal" class="form-control" style="margin-bottom:8px;">
                                            <hr class="bg-grey" style="width:100%;text-align:left;margin-left:auto; height:1px">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <a href="bookings.php"><button type="button" class="btn btn-primary" >Tambahkan</button></a>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>        
    </body>    
    <footer>
        <div class="text-center p-4" style="background-color:#90CAF9; margin-top: 160px;">
        &copy;2021 Copyright <a href="">Yanharr_1202194280</a> 
        </div>
    </footer>
    
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
</html>