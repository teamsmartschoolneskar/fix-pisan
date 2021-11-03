<?php
    //mengaktifkan session pada php
        session_start();

    //koneksi ke database
        include 'koneksi.php';

    //tangkap data yang dikirim dari form login
        $username = $_POST['username'];
        $password = $_POST['password'];

    //seleksi data user dengan username & password yg ada di database
        $login = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' and password='$password'");
    //menghitung jumlah data yg ditemukan
        $cek = mysqli_num_rows($login);

    //cek apakah username & password ditemukan di database
        if($cek > 0) {
            $data = mysqli_fetch_assoc($login);

        //cek jika user login sebagai admin
            if($data['level']=="admin") {
                //session login dan username
                    $_SESSION['username'] = $username;
                    $_SESSION['level'] = "admin";
                //masuk ke homepage admin
                    header("location:homepage-admin.php");

        //cek jika user sebagai siswa
            }else if($data['level']=="siswa"){
                //session login dan username
                    $_SESSION['username'] = $username;
                    $_SESSION['level'] = "siswa";
                //masuk ke homepage murid
                    header("location:homepage-siswa.php");
            }
            else{
                //kembali ke login
                    header("location:index.php?pesan=gagal");
            }
        }
           else{
                header("location:index.php?pesan==gagal");
            }
            
        
        
?>
