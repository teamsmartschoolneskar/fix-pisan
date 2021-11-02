<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginpage.css">
</head>
<body>
    
<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>

    <div class="login-box">
        <h1>Login Here</h1>
        <form method="post" action="cek_login.php">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" autocomplete="off">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" autocomplete="off">
            <a href="#"><input type="submit" name="Submit" value="Sign In"></a>
            <a href="#">Forgot Password?</a>
            <a href="#" text-align='right'>Create an Account</a>
        </form>
    </div>
    
</body>
</html>
