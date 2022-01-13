<?php
    include('Yanharr_Config.php');
    $query ="SELECT * FROM  buku_table";
    $select = mysqli_query($connect, $query);
    $row = mysqli_num_rows($select);

?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title>Home</title>
</head>
<body style = "background : grey;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-light">
        <div class="container-fluid justify-content-between">
            <img class="navbar-brand" src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" alt="LogoEAD" style="height: 50px;">
            <a href="Yanharr_TambahBuku.php" class="btn btn-primary">Tambah Buku</a>
        </div>
    </nav>



    <div class="container mt-5 pt-5">
        <?php
        if($row == 0) {
            echo '<p style="font-size:28px;text-align:center" class="mt-5 pt-5">Belum Ada Buku</p>';
            echo '<hr style="border:1px solid blue"></hr>';
            echo '<p style="text-align:center">Silahkan Menambahkan Buku</p>';
        } else{

        }
        ?>
        <div class="row">
            <?php
                while($show = mysqli_fetch_assoc($select)){
            ?>
            <div class="col-sm-3" style="border:2px solid lightgrey; border-radius:7px; padding:10px; margin-left: 10px; margin-bottom:10px;">
                <div class="card">
                    <img src="gambar/<?php echo $show['gambar']; ?>" class="card-img-top" alt="card image" style="height: 450px;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $show['judul_buku']; ?></h5>
                        <p class="card-text"><?= $show['deskripsi']; ?> </p> 
                    </div>
                    <div class="card-footer">
                        <a href="Yanharr_DetailBuku.php? id_buku=<?= $show['id_buku']; ?>" class="btn btn-primary" type="submit" name="submit">Tampilkan Lebih Lanjut</a>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>    
        </div>
    </div>    
</body>

<br><br>
<footer style = "background : grey;">
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