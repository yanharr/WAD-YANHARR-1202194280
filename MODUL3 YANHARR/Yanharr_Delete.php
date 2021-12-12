<?php
    include('Yanharr_Config.php');
    $id_buku = $_GET['id'];
    $query = "DELETE FROM buku_table WHERE id_buku = '$id_buku'";

    mysqli_query($connect,$query);
    header('Location: Yanharr_Home.php');
?>