<?php
session_start();
if (!isset($_SESSION["login"])){
    header('location: ../index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Perpustakaan | SMK NEGERI 2 Bandar Lampung</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../aset/bootstrap/css/bootstrap.min.css">
  <link rel="icon" href="../logo28.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="../aset/bootstrap/js/bootstrap.min.js"></script>
  

  <!-- datatabel -->
  <link rel="stylesheet" type="text/css" href="../aset/datatabel/datatables.min.css"/>
  <script type="text/javascript" src="../aset/datatabel/datatables.min.js"></script>

  <script>
    $(document).ready(function() {
    $('.datatabel').DataTable();
  } );
  </script>
</head>
<body>
<nav class="navbar navbar-expand" ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color: black;">MENU PERPUS</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../login/home.php" style="color: black;">Home</a></li>  
      <li><a href="../login/mapel.php" style="color: black;">Data Ketersediaan Buku Pelajaran</a></li>
      <li><a href="../login/guru.php" style="color: black;">Data Pengurus</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../logout.php" style="color: black;"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a onclick="window-print()" style="color: black;"><span class="glyphicon glyphicon-print"></span> Print</a></li>
    </ul>
  </div>
</nav>


