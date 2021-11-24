  <!doctype html>
  <html lang="en">
    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <title>HOME</title>
    </head>
    <body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand"><img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" width="150px"></a>
        <form class="d-flex">
            
        <a class="btn btn-primary" href="Yanharr_Tambah Buku.php" role="button">Tambah Buku</a>
        </form>
      </div>
    </nav>

    <div class="container mt-5 pt-5">
        <div class="row d-flex flex-row">
            <?php
                include "Yanharr_Config.php";
                $show = "";
                $query = mysqli_query($connect, $show);
                $row = mysqli_num_rows($query);

                if($row == 0){
                  // echo '<p style="font-size:30px;text-align:center" class="mt-5 pt-5">Belum Ada Buku</p>';
                  // echo '<hr style="border:3px solid blue"></hr>';
                  // echo '<p style="text-align:center">Silahkan Menambahkan Buku</p>';
                  echo '<h1 class="text-align:center" style="margin-top:150px">Belum Ada Buku</h1>';
                  echo '<hr class="bg-primary" style="width:70%;text-align:left;margin-left:auto; height:1px">';
                  echo '<h class="text-align:center" style="margin-top:20px">Silahkan Menambahkan Buku</p>';
                }
                else{
                while($data = mysqli($query)){
            ?>

            <div class="card mx-1" style="width:18rem;">
                <img src="Alif_Asset/<?php echo $data['gambar']?>" alt="foto" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['judul_buku']?></h5>
                    <p class="card-text"><?= $data['deskripsi']?></p>
                    <a class="btn btn-primary" href="Yanharr_DetailBuku.php?id_buku=<?=$data['id_buku']?>">Tampilkan Lebih Lanjut</a>
                </div>
            </div>
            <?php }?>
            <?php }?>
        </div>
    </div>  

    
    
    <br><br>

    <div class="jumbotron text-center">
      <a class="navbar-brand"><img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" width="350px"></a>
      <br><br>
      <p style="font-weight:bold">Perpustakaan EAD</p>
      © Yanharr_1202194280
    </div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
  </html>