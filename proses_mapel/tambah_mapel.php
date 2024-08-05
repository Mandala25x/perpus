<?php
include "../template/adm_nav.php";
require "../function/function_mapel.php";

//cek tombol submit di tekan/belum
if(isset($_POST["submit"])){
    //cek berhasil / tidak tambah data
    if(tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data BERHASIL ditambahkan');
                document.location.href = '../login/mapel.php';
            </script>
        ";
    } else{
        echo "
            <script>
                alert('data GAGAL ditambahkan');
                document.location.href = '../login/mapel.php';
            </script>
        ";
    }
}
?>
<body>

</body>
<div class="container">
<form class="form-horizontal" action="" method="post">
    <div class="row">
    <div class="col-lg-6">
        <h3>Input Data Buku Yang Dipinjam</h3>
        <hr>
        <div class="form-group">
            <label class="control-label col-sm-4" for="kode_matkul">Kode Buku :</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="kode_matkul" id="kode_matkul" required>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-4" for="nama_matkul">Nama Buku :</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="nama_matkul" id="nama_matkul" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="jmlsks_matkul">Jumlah Buku Yang Dipinjam :</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="jmlsks_matkul" id="jmlsks_matkul" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="semester_matkul">Semester :</label>
            <div class="col-sm-8"><select id="semester_matkul" name="semester_matkul" class="form-control select2" style="width: 100%;">
                <option value="-" selected="selected">---</option>
                <option value="1">1 (Satu)</option>
                <option value="2">2 (Dua)</option>
            </select>
            </div>
        </div>
        <hr>
    </div> <!-- col -->
    </div> <!-- row -->
    <button type="submit" name="submit" class="btn btn-primary">Register Buku Mapel</button>
    <a href="../login/mapel.php" class="btn btn-danger">Batal</a>
</form>
</div> <!--container-->

<?php
include "../template/footer.php";