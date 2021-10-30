<?php
    //koneksi ke database
        include 'koneksi.php';

    //menangkap data id yg dikirim dari URL
        $id = $_GET['id'];

    //menghapus data dari database
        mysqli_query($conn, "DELETE FROM data_siswa WHERE id='$id'");

    //kembali ke index
        header("location:index.php");
