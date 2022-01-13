<?php
    include('Yanharr_Config.php');

    if(isset($_POST['submit'])){
        $judul_buku=$_POST['judul_buku'];
        $penulis=$_POST['penulis'];
        $terbit=$_POST['terbit'];
        $deskripsi=$_POST['deskripsi'];
        $tag=implode(",", $_POST['tag']);
        $bahasa=$_POST['bahasa'];
        
        $gambar=$_FILES['gambar']['name'];
        $source = $_FILES['gambar']['tmp_name'];
        $folder = './gambar/';

        move_uploaded_file($source, $folder.$gambar);

        $query = "INSERT INTO buku_table (judul_buku, penulis_buku, tahun_terbit, deskripsi, gambar, tag, bahasa) VALUES ('$judul_buku', '$penulis', '$terbit', '$deskripsi', '$gambar', '$tag', '$bahasa')";
        mysqli_query($connect,$query);

        if($query){
            echo 'Berhasil';
        } else {
            echo 'Gagal';
        }

        header('Location: Yanharr_Home.php');
    }        
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Buku</title>
  </head>

    <body style = "background : grey;">
        <nav class="navbar navbar-dark bg-light">
            <div class="container-fluid">
            <a class="navbar-brand"><img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" width="150px"></a>
            <form class="d-flex"> 
                <a class="btn btn-primary" href="Yanharr_Tambah Buku.php" role="button">Tambah Buku</a>
            </form>
            </div>
        </nav>

        <div class="card mx-auto" style="width: 50rem; margin-top:40px; box-shadow: 0px 0px 2px rgba(0, 0, 0, .1);">
            <div class="card-body">
                <h1 class="card-title text-center">Tambah Data Buku</h5>
                <ul type="none">
                    <form  action="" method="post" enctype="multipart/form-data">
                        <div class="p-3">
                            <li class="mb-2">
                                <label for="judul"><b>Judul Buku</b></label><br>
                                <input class="form-control" type="text" name="judul_buku" id="judul" placeholder="Contoh: Pemrograman Web Bersama EAD">
                            </li>
                            <li class="mb-2">
                                <label for="penulis"><b>Penulis</b></label>
                                <input class="form-control" type="text" name="penulis" id="penulis" value="Yanharr_1202194280" readonly>
                            </li>
                            <li class="mb-2">
                                <label for="tahun"><b>Tahun Terbit</b></label>
                                <input class="form-control" type="text" name="terbit" id="tahun" placeholder="Contoh: 1990">
                            </li>
                            <li class="mb-2">
                                <label for="desc"><b>Deskripsi</b></label>
                                <textarea class="form-control" name="deskripsi" id="desc" cols="30" rows="5" placeholder="Contoh: Buku ini menjelaskan tentang ..."></textarea>
                            </li>
                            <li class="mb-2">
                                <label for="bahasa"><b>Bahasa</b></label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="bahasa" id="bahasa" value="Indonesia">
                                    <label class="form-check-label" for="Indonesia">Indonesia</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="bahasa" id="bahasa" value="Lainnya">
                                    <label class="form-check-label" for="Lainnya">Lainnya</label>
                                </div>
                            </li>
                            <li class="mb-2">
                                <label for="tag"><b>Tag</b></label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="tag[]" id="Pemrograman" value="Pemrograman">
                                    <label class="form-check-label" for="Pemrograman">Pemrograman</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="tag[]" id="Website" value="Website">
                                    <label class="form-check-label" for="Website">Website</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="tag[]" id="Java" value="Java">
                                    <label class="form-check-label" for="Java">Java</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="tag[]" id="OOP" value="OOP">
                                    <label class="form-check-label" for="OOP">OOP</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="tag[]" id="MVC" value="MVC">
                                    <label class="form-check-label" for="MVC">MVC</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="tag[]" id="Kalkulus" value="Kalkulus">
                                    <label class="form-check-label" for="Kalkulus">Kalkulus</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="tag[]" id="Lainnya" value="Lainnya">
                                    <label class="form-check-label" for="Lainnya">Lainnya</label>
                                </div>
                            </li>
                            <li class="mb-2">
                                <label for="gambar"><b>Gambar</b></label>
                                <input class="form-control" type="file" name="gambar" id="gambar">
                            </li>
                            <br>
                            <li class="text-center mb-2">
                                <button class="btn btn-primary" type="submit" name="submit" style="width: 300px">+ Tambah</button>
                            </li>
                        </div>
                    </form>
                </ul>
            </div>    
        </div>
    </body>
    <br><br>
    <footer style = "background : grey;" >
        <div style = "background : grey;" class="row mb-3 mt-3">
            <div class="col text-center">
                <a class="mb-5 mt-5">
                    <img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" alt="logo" width="100">
                </a>
                <h5 class="mt-3">Perpustakaan EAD</h5>
                <p class="mb-5">&copy; Yanharr_1202194280</p>
            </div>
        </div>
    </footer>

</html>