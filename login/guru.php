<?php
require "../server.php";
include "../template/adm_nav.php";

require "../function/function_guru.php";
$dosen_view = query_view("SELECT * FROM tb_guru");
?>
<body>


<div class="container">
    <div class="table-responsive">
        <h3>Data Pengurus Perpustakaan SMK NEGERI 2 Bandar Lampung</h3>
        <hr>
        <div style="padding-bottom:20px">
        <a href="../proses_guru/tambah_guru.php" class="btn btn-primary" title="Tambah data dosen pengajar"><span class="glyphicon glyphicon-pencil"></span> Tambah Data</a>
        </div>
        <table class="table table-stripped table-hover datatabel" style="background-image: url(../aset/img/nav2.jpg);">
        <thead>
            <tr>
                <th>No</th>
                <th>KTP Guru</th>
                <th>Nama Pengurus</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No. Telepon</th>
                <th>Mata Pelajaran</th>
                <th>Jadwal Tugas</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $i = 1;
            foreach($dosen_view as $row){
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row["ktp_guru"]; ?></td>
                <td><?php echo $row["nama_guru"]; ?></td>
                <td><?php echo $row["alamat_guru"]; ?></td>
                <td><?php echo $row["email_guru"]; ?></td>
                <td><?php echo $row["notlp_guru"]; ?></td>
                <td><?php echo $row["bidang_guru"]; ?></td>
                <td><?php echo $row["jadwal_guru"]; ?></td>
                <td>
                    <a href="../proses_guru/hapus_guru.php?id=<?php echo $row["id_guru"]; ?>" onclick="return confirm('Yakin MENGHAPUS data ?');" type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                </td>
            </tr>
        <?php
            }
        ?>
        </tbody>
        </table>
    </div>
</div> <!--container-->
</body>
<?php
    include "../template/footer.php"
?>