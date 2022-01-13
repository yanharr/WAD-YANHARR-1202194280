<?php
    include('Yanharr_Config.php');
        if(isset($_POST['submit'])){
        $id_buku = $_POST['id_buku'];
        $judul_modal=$_POST['judul_buku_modal'];
        $penulis_modal=$_POST['penulis_buku_modal'];
        $tahuntr_modal=$_POST['tahun_terbit_modal'];
        $desc_modal=$_POST['deskripsi_modal'];
        $bahasa_modal=$_POST['bahasa_modal'];
        $postTag= implode(", ",$_POST['tag']);

    if ($_FILES['gambar']['name'] == '') {
        $query = "UPDATE Buku_table SET judul_buku = '$judul_modal', penulis_buku = '$penulis_modal', tahun_terbit = '$tahuntr_modal',
        deskripsi = '$desc_modal', tag = '$postTag', bahasa = '$bahasa_modal' WHERE id_buku = '$id_buku'";
        mysqli_query($connect, $query);
    } else {
    $rand = rand();
    $filename = $_FILES['gambar']['name'];
    $formatfile =  array('png','jpg','jpeg');
    $ukuran = $_FILES['gambar']['size'];
    $tmp_name = $_FILES['gambar']['tmp_name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array($ext, $formatfile) ) {
        echo "
        <script>
        alert('format salah');
        </script>";
    
    }else{
        if($ukuran < 1044070){		
            $gambar_baru = $rand.'_'.$filename;
            move_uploaded_file($tmp_name, './gambar/'.$gambar_baru);

            $query = "UPDATE buku_table SET judul_buku = '$judul_modal', penulis_buku = '$penulis_modal', tahun_terbit = '$tahuntr_modal',
            deskripsi = '$desc_modal', tag = '$postTag', bahasa = '$bahasa_modal', gambar = '$gambar_baru' WHERE id_buku = '$id_buku'";
            
            $dataselect = mysqli_query($connect, "SELECT * FROM Buku_table WHERE id_buku = '$id_buku'");
            $data = mysqli_fetch_assoc($dataselect);
            unlink("./gambar/". $data['gambar']);
            
            mysqli_query($connect, $query);
            echo "
            <script>
                alert('succesfull');
            </script>";
            
        }else{
            echo "
            <script>
                alert('error');
            </script>";
        }
    }
}
header('Location: Yanharr_Home.php');
}
?>