<?php
require "../function/function_guru.php";

$id = $_GET["id"];

if(hapus($id) > 0 ) {
    echo "
    <script>
        alert('data BERHASIL dihapus');
        document.location.href = '../login/guru.php';
    </script>   
    ";
} else {
    echo "
    <script>
        alert('data GAGAL dihapus');
        document.location.href = '../login/guru.php';
    </script>
    ";
}
?>