<?php
include "../template/adm_nav.php";
require "../function/function_mapel.php";

//ambil data url
$id = $_GET["id"];

//data mhs berdasarkan ID
$data_matkul = query_view("SELECT * FROM tb_matkul WHERE id_matkul =$id")[0];

//cek tombol submit ditekan/belum
if(isset($_POST["submit"])){
    //cek berhasil / tidak tambah data
    if(update($_POST) > 0 ) {
        echo "
            <script>
                alert('data BERHASIL diupdate');
                document.location.href = '../login/mapel.php';
            </script>
        ";
    } else{
        echo "
            <script>
                alert('data BERHASIL diupdate');
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
        <h3>Update Data Buku Yang Dipinjam </h3>
        <hr>
        <input type="hidden" name="id" value="<?php echo $data_matkul["id_matkul"];?>">
        <div class="form-group">
            <label class="control-label col-sm-4" for="kode_matkul">Kode Buku :</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="kode_matkul" id="kode_matkul" required value="<?php echo $data_matkul["kode_matkul"];?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-4" for="nama_matkul">Nama Buku :</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="nama_matkul" id="nama_matkul" required value="<?php echo $data_matkul["nama_matkul"];?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="jmlsks_matkul">Jumlah yang dipinjam :</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="jmlsks_matkul" id="jmlsks_matkul" required value="<?php echo $data_matkul["kode_matkul"];?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="semester_matkul">Semester :</label>
            <div class="col-sm-8"><select id="semester_matkul" name="semester_matkul" class="form-control select2" style="width: 100%;">
                <option value="<?php echo $data_matkul["semester_matkul"];?>" selected="selected"><?php echo $data_matkul["semester_matkul"];?></option>
                <option value="1">1 (Satu)</option>
                <option value="2">2 (Dua)</option>
            </select>
            </div>
        </div>
        <hr>
    </div> <!-- col -->
    </div> <!-- row -->
    <button type="submit" name="submit" class="btn btn-primary">Update</button>
    <a href="../login/mapel.php" class="btn btn-danger">Batal</a>
</form>
</div> <!--container-->

<?php
include "../template/footer.php";
?>