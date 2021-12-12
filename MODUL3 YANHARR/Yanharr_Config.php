<?php 
    $dbhost ="localhost:3307";
    $dbuser ="root";
    $dbname ="modul3";
    $dbpass ="";

    
    $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$connect) {
        echo "<script>
                alert('Gagal')'
              </script>";
    }
?>