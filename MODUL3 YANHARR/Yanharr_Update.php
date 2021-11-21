<?php
    include 'Yanharr_Config.php';

    $judul = $_POST['judul'];
    $tahun = $_POST['tahunterbit'];
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
        $postEvent = mysqli_query($connect, "UPDATE buku_table SET judul_buku='$judul',tahun_terbit='$tahun',deskripsi='$desc',gambar='$xx',tag='$tag',bahasa='$bahasa'");
        header("location:Yanharr_Home.php");
    }
?>