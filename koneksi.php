<?php 
    //koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "database");

    //cek koneksi
    if (mysqli_connect_errno()) {
        echo "KONEKSI KE DATABASE GAGAL!" . mysqli_connect_error();
    }
?>
