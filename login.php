<?php
session_start();
require "server.php";



if(isset($_POST["login"])){
  
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$username'");

  //check user
  if( mysqli_num_rows($result) === 1){

    //cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])){

      //cek session
      $_SESSION["login"] = true;

      
      header('Location: login/home.php');
      exit;
    }
  }
  $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="aset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="admin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="aset/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" align="center">
  <div align="center" style="width:400px;margin-top:5%;">
    <form method="post" class="well well-lg" action=""> 
    <h4 align="center">Welcome Back!</h4>
    <h3 align="center"><img src="logo28.png" width="35px"> Perpustakaan SMK NEGERI 2 </h3>
    <hr>
    <h4 align="center" width="25px"> Login Perpus</h4>
    <?php if(isset($error)){
    ?>
      <p style="color: red; font-style: italic;">Username / Password Lo Salah</p>
    <?php }
    ?>
      <div class="form-group" align="left">
        <label for="username"><span class="glyphicon glyphicon-user"></span> Username:</label>
        <input type="text" class="form-control" id="username" placeholder="ketikkan username anda" name="username" autocomplete="off" required>
      </div>
      <div class="form-group" align="left">
        <label for="password"><span class="glyphicon glyphicon-cog"></span> Password:</label>
        <input type="password" class="form-control" id="password" placeholder="ketikkan password anda" name="password">
      </div>
      <hr>
      <button type="submit" name="login" class="btn btn-block btn-success">LOGIN</button>
      <a href="registrasi.php" type="button" class="btn btn-block btn-primary">Belum punya akun bre?, Daftar Dulu Bree</a>
      <hr>

      
        
    </form>
  </div>
</div>

</body>
</html>