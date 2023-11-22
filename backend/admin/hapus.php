<?php

include "../koneksi.php";

$id = $_GET['id_admin'];

$hapus = mysqli_query($koneksi, "DELETE FROM tb_admin WHERE id_admin='$id'");

if ($hapus) {
    echo "<script>
    alert('Data Berhasil Dihapus')
    window.location.href='../?page=admin/index'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Dihapus')
    window.location.href='../?page=admin/index'
    </script>";
}
