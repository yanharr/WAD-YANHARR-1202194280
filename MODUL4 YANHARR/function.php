    <?php

        $host="localhost";
        $user="root";
        $password="";
        $db="wad_modul4";

        $connect = mysqli_connect($host,$user,$password,$db);
        if (!$connect){
            die("Koneksi gagal:".mysqli_connect_error());
        }

    function registrasi($data) {
        global $connect;
        $nama = strtolower(stripslashes($data["nama"]));
        $email = strtolower(stripslashes($data["email"]));
        $nohp = strtolower(stripslashes($data["nohp"]));
        $katasandi = mysqli_real_escape_string($connect, $data["katasandi"]);
        $kkatasandi = mysqli_real_escape_string($connect, $data["kkatasandi"]);
    
        // cek username sudah ada atau belum
        $result = mysqli_query($connect, "SELECT email from user WHERE email='$email'");

        if (mysqli_($result)) {
            echo "<script>
                    alert('usernmame sudah terdaftar!')
                </script>";
            return false;      
        }

        // cek konfirmasi password

        if($katasandi == $kkatasandi) {
            echo "<script>
                    alert('konfirmasi password tidak sesuai');
                </script>";
                return false;

        }

        

        $katasandi = password_hash($katasandi, PASSWORD_DEFAULT);

        mysqli_query($connect, "INSERT INTO user VALUES('','$nama','$email','$katasandi','$nohp')");

        return mysqli_affected_rows($connect);

        // tambahkan userbaru ke database
        
    }

    ?>