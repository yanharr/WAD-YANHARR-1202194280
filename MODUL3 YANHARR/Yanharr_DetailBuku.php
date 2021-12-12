<?php
    include('Yanharr_Config.php');
    $id_buku = $_GET['id_buku'];

    $query = "SELECT * FROM buku_table WHERE id_buku = '$id_buku'";
    $select = mysqli_query($connect, $query);
    $showdetail= mysqli_fetch_assoc($select);
    $tag = explode(',', $showdetail['tag']);
?>

<html>
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
                
                <a class="btn btn-primary" href="Yanharr_TambahBuku.php" role="button">Tambah Buku</a>
                </form>
            </div>
        </nav>  

        <div class="card mx-auto" style="width: 50rem; margin-top:40px; box-shadow: 0px 0px 2px rgba(0, 0, 0, .1);">
            <div class="card-body">
                <h1 class="card-title text-center">Detail Buku</h1>
                <div class="margin-left:15px; margin-right:15px; margin-bottom:15px" class="text-center">
                    <center> <img src="gambar/<?= $showdetail['gambar']?>" style="height:650px"> </center>
                    <hr class="bg-primary" style="width:100%;text-align:left;margin-left:auto; height:1px">
                </div>
                <div class="mb-3">
                    <label for="judul" class="fw-bold">Judul :</label>
                    <p><?= $showdetail['judul_buku']; ?></p>
                </div>
                <div>
                    <label for="Penulis" class="fw-bold">Penulis :</label>
                    <p><?= $showdetail['penulis_buku']; ?></p>
                </div>    
                <div>
                    <label for="TahunTerbit" class="fw-bold">Tahun Terbit :</label>
                    <p><?= $showdetail['tahun_terbit']; ?></p>
                </div>    
                <div>
                    <label for="Deskripsi" class="fw-bold">Deskripsi :</label>
                    <p><?= $showdetail['deskripsi']; ?></p>
                </div>    
                <div>
                    <label for="Bahasa" class="fw-bold">Bahasa :</label>
                    <p><?= $showdetail['bahasa']; ?></p>
                </div>    
                <div>
                    <label for="Tag" class="fw-bold">Tag :</label>
                    <p><?= $showdetail['tag']; ?></p>
                </div>    
                <div class="container text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sunting" style="width: 300px">Sunting</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus" style="width: 300px">Hapus</button>                       
                </div>
            


                <!-- Modal -->
                <div class="modal fade" id="sunting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">               
                                <form action="Yanharr_Update.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id_buku" value="<?= $showdetail['id_buku'] ?>">
                                    <div class="mb-3">
                                        <label for="judul_buku" class="form-label">Judul Buku</label>
                                        <input type="text" name="judul_buku_modal" class="form-control" id="judul_buku" value="<?= $showdetail['judul_buku'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="penulis" class="form-label">Penulis</label>
                                        <input type="text" name="penulis_buku_modal" class="form-control" id="penulis" value=<?= $showdetail['penulis_buku'] ?> readonly >
                                    </div>
                                    <div class="mb-3">
                                        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                                        <input type="text" name="tahun_terbit_modal" class="form-control" value="<?= $showdetail['tahun_terbit']; ?>" id="tahun_terbit">
                                    </div>
                                    <div class="mb-3">
                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                        <textarea class="form-control" name="deskripsi_modal" placeholder="Contoh : Buku ini menjelaskan tentang" id="deskripsi" rows="3"><?= $showdetail['deskripsi'] ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label>Bahasa</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="bahasa_modal" id="flexRadioDefault1" value="Indonesia" <?= $showdetail['bahasa'] == 'Indonesia' ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Indonesia
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="bahasa_modal" id="flexRadioDefault2" value="Lainnya" <?= $showdetail['bahasa'] == 'Lainnya' ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Lainnya
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label>Tag</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Pemrograman" id="Pemrograman" name="tag[]" <?= in_array('Pemrograman', $tag)  ? 'checked' : ""; ?>>
                                            <label class="form-check-label" for="Pemrograman">
                                                Pemrograman
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Website" id="Website" name="tag[]" <?= in_array('Website', $tag)  ? 'checked' : ""; ?>>
                                            <label class="form-check-label" for="Website">
                                                Website
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Java" id="Java" name="tag[]" <?= in_array('Java', $tag)  ? 'checked' : ""; ?>>
                                            <label class="form-check-label" for="Java">
                                                Java
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="OOP" id="OOP" name="tag[]" <?= in_array('OOP', $tag)  ? 'checked' : ""; ?>>
                                            <label class="form-check-label" for="OOP">
                                                OOP
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="MVC" id="MVC" name="tag[]" <?= in_array('MVC', $tag)  ? 'checked' : ""; ?>>
                                            <label class="form-check-label" for="MVC">
                                                MVC
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Kalkulus" id="Kalkulus" name="tag[]" <?= in_array('Kalkulus', $tag)  ? 'checked' : ""; ?>>
                                            <label class="form-check-label" for="Kalkulus">
                                                Kalkulus
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Lainnya" id="Lainnya" name="tag[]" <?= in_array('Lainnya', $tag)  ? 'checked' : ""; ?>>
                                            <label class="form-check-label" for="Lainnya">
                                                Lainnya
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Gambar</label>
                                        <input class="form-control" type="file" name="gambar_modal" id="formFile">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" name="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Hapus</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah Anda yakin ingin menghapus ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <a  name="delete" href ="Yanharr_Delete.php?id=<?php echo $showdetail['id_buku'] ?>" >
                                    <button type="submit" class="btn btn-danger">Hapus</button>  </a>     
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>                

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <footer class="footer nt-auto bg-light text-center p-5">
        <div class="jumbotron text-center">
            <a class="navbar-brand"><img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" width="350px"></a>
            <br><br>
            <p style="font-weight:bold">Perpustakaan EAD</p>
            © Yanharr_1202194280
        </div>
    </footer>
 
</html>