<?php
require "function/function_register.php";

if(isset($_POST["register"])){
    if(registrasi($_POST) > 0){
        echo "<script>
            alert('User baru berhasil di tambahkan');
            </script>";
    } else  {
        echo mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman registrasi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="aset/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" align="center">
    <div align="center" style="width:400px; margin-top:5%;">
        <form action="#" class="well well-lg" action="" method="post">
        <h3 align="center"><img src="logo28.png" width="10%"> Registrasi Perpus Baru</h3>
        <hr>
        <div class="form-group" align="left">
            <label for="username"><span class="glyphicon glyphicon-user"></span> Username:</label>
            <input type="text" class="form-control" id="username" placeholder="Buat username anda" name="username" autocomplete="off" required>
        </div>
        <div class="form-group" align="left">
        <label for="password"><span class="glyphicon glyphicon-cog"></span> Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Buat password anda" name="password">
        </div>
        <div class="form-group" align="left">
        <label for="password2"><span class="glyphicon glyphicon-cog"></span> Konfirmasi Password:</label>
            <input type="password" class="form-control" id="password2" placeholder="Masukkan kembali password anda" name="password2">
        </div>
        <button type="submit" name="register" class="btn btn-block btn-success">Register Sekarang</button>
        <a href="login.php" class="btn btn-block btn-danger">Batal</a>
    </form>
    </div>
</div>

</body>
</html>