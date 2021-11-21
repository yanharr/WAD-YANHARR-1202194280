<?php
    include 'Yanharr_Config.php';

    $nama = "Yanharr_1202194280";

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    $id_buku = $_GET['id_buku'];
    $query = "SELECT * FROM buku_table WHERE id_buku = '$id_buku'";
    $detail = mysqli_query($connect, $query);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Detail Buku</title>
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
            <h1 class="card-title text-center">Detail Buku</h5>
            <?php foreach($detail as $data) {?>
            <div class="margin-left:15px; margin-right:15px; margin-bottom:15px" class="text-center">
                <img class="my-3" src="Yanharr_Asset/<?php echo $data['gambar']?>" alt="gambar" class="card-img-top" width="400px">
                <hr class="bg-primary" style="width:100%;text-align:left;margin-left:auto; height:1px">
            </div>
            <div class="mb-3">
                <label for="judul" class="fw-bold">Judul :</label>
                <p><?= $data['judul_buku']?></p>
            </div>
            <div class="form-group">
                <label for="penulis" class="fw-bold">Penulis :</label>
                <p>Yanharr_1202194280</p>
            </div>
            <div class="form-group">
                <label for="tahunterbit" class="fw-bold">Tahun Terbit :</label>
                <p><?= $data['tahun_terbit']?></p>
            </div>
            <div class="form-group">
                <label for="Deskripsi" class="fw-bold">Deskripsi :</label>
                <p><?= $data['deskripsi']?></p>    
            </div>
            <div class="form-group" class="fw-bold">
                <label for="Bahasa" class="fw-bold">Bahasa :</label>
                <<p><?= $data['bahasa']?></p>
            </div>
            <div class="form-group">
                <label for="tag" class="fw-bold">Tag :</label>
                <p><?= $data['tag']?></p>
            </div>
            <div class="container text-center">  
                <button type="button" class="btn btn-primary text-center" name="Sunting" data-toggle="modal" data-target="#contohModal" style="width:335px">Sunting</button>

                <button type="submit" class="btn btn-danger text-center" name="Hapus" style="width:335px">Hapus</button>

            </div>    

            <div class="modal fade" id="contohModal" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title">Sunting</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>    
                        </div>

                        <div class="modal-body text-left">
                            <form>
                            <div class="mb-3">
                                <label for="judulbuku" style="font-weight:bold">Judul Buku</label>
                                <input type="text" class="form-control" name="judulbuku" id="judulbuku" value="<?= $data['judul_buku']?>">
                            </div>
                            <div class="mb-3">
                                <label for="Penulis" style="font-weight:bold">Penulis</label>
                                <input type="text" class="form-control" name="penulis" id="penulis" value="Yanharr_1202194280" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="tahunterbit" style="font-weight:bold">Tahun Terbit</label>
                                <input type="number" class="form-control" name="tahunterbit" id="tahunterbit" value="<?= $data['judul_buku']?>">
                            </div>
                            <div class="mb-3">
                                <label for="Deskripsi" style="font-weight:bold">Deskripsi</label>
                                <textarea class="form-control" rows="3" cols="30" name="deskripsi"> <?= preg_replace('~\x{00a0}~siu', '', $data['deskripsi']); ?> </textarea>   
                            </div>
                            <div class="mb-3">
                                <label for="Bahasa" style="font-weight:bold">Bahasa</label>

                                <input type="radio" name="indonesia" value="indonesia" id="indonesia" style="margin-left:20px" <?php echo ($data['bahasa']=='indonesia' ? 'checked' : '');?>>
                                <label for="indonesia">Indonesia</label>

                                <input type="radio" name="lainnya" value="Lainnya" id="lainnya" style="margin-left:10px" <?php echo ($data['bahasa']=='lainnya' ? 'checked' : '');?>>
                                <label for="lainnya">Lainnya</label>
                            </div> 
                            <div class="mb-3">
                                <?php
                                    if (isset($data['tag'])) {
                                        $tag = explode(",", $data['tag']);
                                    } else {
                                        $tag = [];
                                    }
                                ?>
                                <label class="fw-bold me-5" for="tag">Tag</label>
                                <input class="form-check-input" type="checkbox" value="Pemrograman" id="pemrograman"
                                    name="tag[]"
                                    <?php if (in_array("Pemrograman", $tag)): ?> checked> <?php endif; ?>
                                <label class="form-check-label me-3" for="pemrograman">
                                    Pemrograman
                                </label>
                                <input class="form-check-input" type="checkbox" value="Website" id="website"
                                    name="tag[]"
                                    <?php if (in_array("Website", $tag)): ?> checked> <?php endif; ?>
                                <label class="form-check-label me-3" for="website">
                                    Website
                                </label>
                                <input class="form-check-input" type="checkbox" value="Java" id="java" name="tag[]"
                                    <?php if (in_array("Java", $tag)): ?> checked> <?php endif; ?>
                                <label class="form-check-label me-3" for="java">
                                    Java
                                </label>
                                <input class="form-check-input" type="checkbox" value="MVC" id="mvc" name="tag[]"
                                    <?php if (in_array("MVC", $tag)): ?> checked> <?php endif; ?>
                                <label class="form-check-label me-3" for="mvc">
                                    MVC
                                </label>
                                <input class="form-check-input" type="checkbox" value="Kalkulus" id="kalkulus"
                                    name="tag[]"
                                    <?php if (in_array("Kalkulus", $tag)): ?> checked> <?php endif; ?>
                                <label class="form-check-label" for="kalkulus">
                                    Kalkulus
                                </label>
                                <input class="form-check-input" type="checkbox" value="Lainnya" id="lainnya"
                                    name="tag[]"
                                    <?php if (in_array("Lainnya", $tag)): ?> checked> <?php endif; ?>
                                <label class="form-check-label me-3" for="lainnya">
                                    Lainnya
                                </label>
                            </div>
                            <div class="mb-3">
                                <label class="fw-bold">Gambar</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                </div>
                            </div>    
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" >Tutup</button>
                            <button type="Submit" class="btn btn-primary" >Simpan Perubahan</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Hapus</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Apakah Anda yakin ingin menghapus ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <a href="Alif_Delete.php?id_buku=<?php echo $data['id_buku']?>">
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
                
            </div>
            </div>  
            
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