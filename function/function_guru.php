<?php
require "../server.php";

function query_view($query_view) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query_view);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data_dosen){
    global $koneksi;
    //ambil elemen data
    $ktp = htmlspecialchars($data_dosen["ktp_guru"]);
    $nama = htmlspecialchars($data_dosen["nama_guru"]);
    $alamat = htmlspecialchars($data_dosen["alamat_guru"]);
    $email = htmlspecialchars($data_dosen["email_guru"]);
    $notlp = htmlspecialchars($data_dosen["notlp_guru"]);
    $bidang = htmlspecialchars($data_dosen["bidang_guru"]);
    $jadwal = htmlspecialchars($data_dosen["jadwal_guru"]);

    //query
    $query = "INSERT INTO tb_guru
                VALUES
                ('', '$ktp', '$nama', '$alamat', '$email', '$notlp', '$bidang', '$jadwal')
    ";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function hapus($id_dosen){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tb_guru WHERE id_guru = $id_dosen");

    return mysqli_affected_rows($koneksi);
}

function update($data_dosen){
    global $koneksi;
    //ambil elemen data
    $id_dosen = $data_dosen["id"];
    $ktp = htmlspecialchars($data_dosen["ktp_guru"]);
    $nama = htmlspecialchars($data_dosen["nama_guru"]);
    $alamat = htmlspecialchars($data_dosen["alamat_guru"]);
    $email = htmlspecialchars($data_dosen["email_guru"]);
    $notlp = htmlspecialchars($data_dosen["notlp_guru"]);
    $bidang = htmlspecialchars($data_dosen["bidang_guru"]);
    $jadwal = htmlspecialchars($data_dosen["jadwal_guru"]);

    //query
    $query = "UPDATE tb_guru SET
                ktp_guru = '$ktp'
                nama_guru = '$nama'
                alamat_guru = '$alamat'
                email_guru = '$email'
                notlp_guru = '$notlp'
                bidang_guru = '$bidang'
                jadwal_guru = '$jadwal'
            WHERE id_guru = $id_dosen
            ";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

?>