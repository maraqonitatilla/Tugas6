<?php 
$host = "localhost";
$user = "root";
$pass = "";
$database = "db_mhs";

$conn = mysqli_connect($host, $user, $pass, $database);

mysqli_select_db($conn, $database);

        if($conn){
            echo "Koneksi database berhasil";
        }
        else{
            echo "Koneksi database gagal";
        }
    

?>