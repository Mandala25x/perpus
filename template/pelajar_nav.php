<!DOCTYPE html>
<html lang="en">
<head>
  <title>Perpustakaan</title>
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

<nav class="navbar navbar-expand" style="background-color: #3D8361;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="https://www.smkpgri4bl.com/" style="color: white;">PELAJAR</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../pelajar/pelajar_home.php" style="color: white;">Home</a></li>
      <li><a href="../pelajar/pelajar_reg.php" style="color: white;">Peminjaman Buku</a></li>
      <li><a href="../pelajar/pelajar_mapel.php" style="color: white;">Daftar Buku</a></li>
      <li><a href="../pelajar/pelajar_pelajar.php" style="color: white;">Daftar Buku Yang Di Pinjam</a></li>
      <li><a href="../pelajar/pelajar_guru.php" style="color: white;">Daftar Pengurus Perpustakaan</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../logout.php" style="color: white;"><span class="glyphicon glyphicon-log-in" ></span> Logout</a></li>
    </ul>
    <!--<ul class="nav navbar-nav navbar-right">
      <li><a href=""><span class="glyphicon glyphicon-log-in"></span> Login Admin</a></li>
    </ul> -->
  </div>
</nav>
