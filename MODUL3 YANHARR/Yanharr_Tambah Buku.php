<?php
    include 'Yanharr_Config.php';
    
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    $nama = "Yanharr_1202194280";

    if(isset($_POST['submit'])){
        $judul = $_POST['judulbuku'];
        $nama = $_POST['penulis'];
        $tahun = (int)$_POST['tahunterbit'];
        $desc = $_POST['deskripsi'];
        $bahasa= $_POST['bahasa'];
        $tag = implode(",",$_POST['tag']);
        
        $rand = rand();
        $ekstensi =  array('png','jpg','jpeg','gif');
        $filename = $_FILES['gambar']['name'];
        $ukuran = $_FILES['gambar']['size'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        
        if(!in_array($ext,$ekstensi) ) {
            header("location:Yanharr_Home.php?alert=gagal_ekstensi");
        }else{	
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['gambar']['tmp_name'], 'Yanharr_Asset/'.$rand.'_'.$filename);
            $postEvent = mysqli_query($connect, "INSERT INTO buku_table VALUES ('', '$judul', '$nama', '$tahun', '$desc', '$xx', '$tag', '$bahasa')");
            header("location:Yanharr_Home.php");
        }
    }  

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Tambah Buku</title>
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
    <!-- Navbar Sampai Sini -->

    <!-- kotak -->
    <div class="card mx-auto" style="width: 50rem; margin-top:40px; box-shadow: 0px 0px 2px rgba(0, 0, 0, .1);">
      <div class="card-body ">
        <h1 class="card-title text-center">Tambah Data Buku</h5>
        <form action="Yanharr_home.php" method="POST" enctype="multipart/form-data ">
          <div class="form-group">
            <label for="judulbuku">Judul Buku</label>
            <input type="text" class="form-control" name="judulbuku" id="judulbuku">
          </div>
          <div class="form-group">
            <label for="Penulis">Penulis</label>
            <input type="text" class="form-control" name="penulis" id="penulis" value="Yanharr_1202194280" readonly>
          </div>
          <div class="form-group">
            <label for="tahunterbit">Tahun Terbit</label>
            <input type="text" class="form-control" name="tahunterbit" id="tahunterbit">
          </div>
          <div class="form-group">
            <label for="Deskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="Deskripsi" rows="4"></textarea>    
          </div>
          <div class="form-group">
            <label for="Bahasa">Bahasa</label>

            <input type="radio" name="bahasa" value="indonesia" id="indonesia" style="margin-left:20px">
            <label for="indonesia">Indonesia</label>

            <input type="radio" name="bahasa" value="Lainnya" id="lainnya" style="margin-left:10px">
            <label for="lainnya">Lainnya</label>
          </div>
        
          <div class="form-group">
            <label for="Bahasa">Tag</label>

            <input type="checkbox" name="tag[]" value="pemrograman" id="tag" style="margin-left:20px">
            <label for="Pemrograman">Pemrograman</label>

            <input type="checkbox" name="tag[]" value="Website" id="tag" style="margin-left:10px">
            <label for="Website">Website</label>

            <input type="checkbox" name="tag[]" value="java" id="tag" style="margin-left:10px">
            <label for="java">Java</label>

            <input type="checkbox" name="tag[]" value="oop" id="tag" style="margin-left:10px">
            <label for="oop">OOP</label>

            <input type="checkbox" name="tag[]" value="mvc" id="tag" style="margin-left:10px">
            <label for="mvc">MVC</label>

            <input type="checkbox" name="tag[]" value="kalkulus" id="tag" style="margin-left:10px">
            <label for="kalkulus">Kalkulus</label>

            <input type="checkbox" name="tag[]" value="lainnya" id="tag" style="margin-left:10px">
            <label for="lainnya">lainnya</label>
          </div>
          <div class="mb-3">
            <label for="gambar">Gambar</label>   
            <div class="custom-file" style="margin-left:auto">              
              <input type="file" class="file-input" name="gambar" id="gambar">
              <label  for="gambar"></label>
            </div>
          </div>  
            
          <br><br>


          
          <div class="text-center">
            <button type="submit" class="btn btn-primary text-center" name="tambah" role="button" style="width:350px">+ Tambah</button>
          </div>
          <br><br>
        </form>
          
      </div>
    </div>

    <br><br>

    <div class="jumbotron text-center">
      <a class="navbar-brand"><img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" width="350px"></a>
      <br><br>
      <p style="font-weight:bold">Perpustakaan EAD</p>
      © Yanharr_1202194280
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  
  </body>
</html>


