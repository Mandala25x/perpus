<?php
require "../server.php";
include "../template/adm_nav.php";

require "../function/function_mapel.php";
$matkul_view = query_view("SELECT * FROM tb_matkul");
?>
<body>


<div class="container">
    <div class="table-responsive">
        <h3>Data Ketersediaan Buku SMK NEGERI 2 Bandar Lampung</h3>
        <hr>
        <div style="padding-bottom:20px">
        <a href="../proses_mapel/tambah_mapel.php" class="btn btn-primary" title="Tambah data mata kuliah"><span class="glyphicon glyphicon-pencil"></span> Tambah Data</a>
        </div>
        <table class="table table-stripped table-hover datatabel" style="background-image: url(../aset/img/nav2.jpg);">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Kode Mata Pelajaran</th>
                <th>Nama Mata Pelajaran</th>
                <th>Jumlah Buku</th>
                <th>Opsi</th>
                <th>Opsi</th>                  
            </tr>
        </thead>  
        <tbody>
        <?php
            $i=1;
            foreach ($matkul_view as $row) {
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row["kode_matkul"];?></td>
                <td><?php echo $row["nama_matkul"];?></td>
                <td><?php echo $row["jmlsks_matkul"];?></td>
                <td>
                    <a href="../proses_mapel/update_mapel.php?id=<?php echo $row["id_matkul"]; ?>" type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-upload"></span> Update</a>
                </td>
                <td>
                    <a href="../proses_mapel/hapus_mapel.php?id=<?php echo $row["id_matkul"]; ?>" onclick="return confirm('Yakin MENGHAPUS data ?');" type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                </td>
            </tr>
        <?php
            }
        ?>
        </tbody>
        </body>
        </table> 
    </div>
</div> <!--container-->

<?php
include "../template/footer.php";
?>