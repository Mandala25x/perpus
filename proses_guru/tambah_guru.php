<?php
include "../template/adm_nav.php";
require "../function/function_guru.php";

//cek tombol submit ditekan/belum
if(isset($_POST["submit"])){
    
    //cek berhasil / tidak tambah data
    if(tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data BERHASIL ditambahkan');
                document.location.href = '../login/guru.php';
            </script>
        ";
    } else{
        echo "
            <script>
                alert('data GAGAL ditambahkan');
                document.location.href = '../login/guru.php.php';
            </script>
        ";
    }

}
?>
<body>
<body>

</body>
<div class="container">
<div class="panel panel-default" style="background-image: url(../aset/img/pinjam.jpg); background-size: cover;">
    <h1 align="center" style="color: #000000;">Tambah Pengurus</h1>
<div class="panel-heading" style="background-image: url(../aset/img/pinjam.jpg); background-size: cover;">
</div>
<div class="panel-body" style="color: #000000;">
    <form class="form-horizontal" action="" method="post">
        <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="control-label col-sm-4" for="ktp_guru">KTP :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="ktp_guru" id="ktp_guru" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="nama_guru">Nama Lengkap :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_guru" id="nama_guru" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="alamat_guru">Alamat :</label>
                <div class="col-sm-8">
                    <textarea id="alamat_guru" name="alamat_guru" class="form-control" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="email_guru">Email :</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" name="email_guru" id="email_guru" required>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="control-label col-sm-4" for="notlp_guru">No. Telepon :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="notlp_guru" id="notlp_guru" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="bidang_guru">Bidang Dosen:</label>
                <div class="col-sm-8"><select id="bidang_guru" name="bidang_guru" class="form-control select2" style="width: 100%;">
                    <option value="-" selected="selected">---</option>
                    <option value="Komputasi">Komputasi</option>
                    <option value="Jaringan">Jaringan</option>
                    <option value="RPL">RPL</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="jadwal_guru">Jadwal Tugas :</label>
                <div class="col-sm-8">
                    <textarea id="jadwal_guru" name="jadwal_guru" class="form-control" required></textarea>
                </div>
            </div>
        </div> <!-- col -->
        </div> <!-- row -->
        <hr>
        <button type="submit" name="submit" class="btn btn-primary">Register Data</button>
        <a href="../login/guru.php" class="btn btn-danger">Batal</a>
    </form>
</div>
</div> <!--container-->
</body>
<?php
include "../template/footer.php";
?>